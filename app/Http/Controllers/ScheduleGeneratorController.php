<?php

namespace App\Http\Controllers;

use App\Days;
use App\Discipline_schedules;
use App\Disciplines;
use App\Start_and_end_hours;
use Illuminate\Http\Request;

class ScheduleGeneratorController extends Controller
{
    function index()
    {
        $disciplines = Disciplines::with(['departament'])->get();
        $starEndHours = Start_and_end_hours::with(['typeHour'])->get();
        $schedules = Discipline_schedules::with(['start_hour'], ['end_hour'], ['discipline'], ['day'])->get();
        $days = Days::all();

        return view('scheduleGenerator', [
            'disciplines' => $disciplines,
            'schedules' => $schedules,
            'hours' => $starEndHours,
            'days' => $days
        ]);
    }

    function scheduleGenerator(Request $request)
    {
        $checkSelectSchedule = $request->all();
        $disciplines = array();
        unset($checkSelectSchedule['_token']);
        if (empty($checkSelectSchedule)) {
            $message = "Por favor, selecione uma ou mais matérias para a criação de horário";
            return redirect()->back()->with('alertDontOK', $message);
        } else {
            foreach ($checkSelectSchedule as $key => $value) {
                $id = $key;
                $disciplines[] = Disciplines::where('id', '=', $id)->get();
            }

            $data = $this->verificationDisciplineSchedule($disciplines);
            $found = $data["found"]; // Disciplinas com horários alocados
            $fault = $data["fault"]; // Disciplinas sem horários alocados

            if (empty($found)) {
                $message = "Erro, nenhuma disciplina escolhida tem horário(s) alocado(s), tente novamente mais tarde";
                return redirect()->back()->with('alertDontOK', $message);
            }

            $schedules = $this->getDisciplinesSchedules($found);
            $alocations = $this->verification($schedules); // disciplinas alocadas
            $formatedAlocation = array();
            foreach ($alocations as $alocation) {
                $formatedAlocation[] = $alocation[0];
            }

            if (empty($alocations)) {
                $message = "Erro, as disciplinas selecionadas não contem combinação possivel";
                return redirect()->back()->with('alertDontOK', $message);
            } else {
                return view('generatedSchedule', [
                    'schedules' => $formatedAlocation
                ]);
            }
        }

    }

    function verificationDisciplineSchedule($disciplines)
    {
        $fault = array();
        $found = array();

        foreach ($disciplines as $discipline) {
            $id = $discipline[0]->id;
            if (Discipline_schedules::where('disciplineId', '=', $id)->count() == 0) {
                $fault[] = $id;
            } else {
                $found[] = $id;
            }
        }
        return array('fault' => $fault, 'found' => $found);
    }

    function getDisciplinesSchedules($idSchedules)
    {
        $schedules = array();

        foreach ($idSchedules as $id) {
            $schedules[] = Discipline_schedules::where('disciplineId', '=', $id)->get();
        }

        return $schedules;
    }

    function verification($schedules)
    {
        $alocations = array();
        foreach ($schedules as $schedule) {
            $alocations[] = $this->verificationClasses($schedule, $schedules);
        }

        return $alocations;
    }

    function verificationClasses($scheduleClasses, $schedules)
    {
        $alocations = array();
        $problemAlocations = array();
        if (count($scheduleClasses) > 1) {
            foreach ($scheduleClasses as $scheduleClass) {
                if ($this->verificationHour($scheduleClass, $schedules)) {
                    $alocations[] = $scheduleClass;
                    break;
                } else {
                    $problemAlocations[] = $scheduleClass;
                }
            }
        } else {
            foreach ($scheduleClasses as $s) {
                if ($this->verificationHour($s, $schedules)) {
                    $alocations[] = $s;
                } else {
                    $problemAlocations[] = $s;
                }
            }

        }

        if (empty($alocations)) {
            return false;
        } else {
            return $alocations;
        }
    }

    function verificationHour($scheduleClass, $schedules)
    {
        foreach ($schedules as $schedule) {
            foreach ($schedule as $item) {
                if ($scheduleClass->startHourId == $item->startHourId && $scheduleClass->dayId == $item->dayId && $scheduleClass->id != $item->id) {
                    return false;
                }
            }
        }

        return true;
    }
}
