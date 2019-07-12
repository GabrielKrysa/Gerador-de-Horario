<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Objects\DisciplineSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplineScheduleController extends Controller
{

    function requestSchedule(Request $request)
    {
        $disciplineSchedule = new DisciplineSchedule();
        $disciplineSchedule->construct($request->all());
        if ($disciplineSchedule->scheduleHourVerification()) {
            if ($disciplineSchedule->getClass() == 1) {
                $class = "TA";
            } else if ($disciplineSchedule->getClass() == 2) {
                $class = "TB";
            } else if ($disciplineSchedule->getClass() == 1) {
                $class = "TC";
            } else {
                $class = "TD";
            }

            $data = array(
                "disciplineId" => $disciplineSchedule->getDiscipline(),
                "class" => $class,
                "teacher" => strtolower($disciplineSchedule->getTeacher()),
                "studentsCapacity" => $disciplineSchedule->getCapacity(),
                "startHourId" => $disciplineSchedule->getStartHour(),
                "endHourId" => $disciplineSchedule->getEndHour(),
                "dayId" => $disciplineSchedule->getDay()
            );

            if (DB::table('discipline_schedules')->insert($data)) {
                $message = "Horário alocado com sucesso!";
                return redirect()->back()->with('alertOK', $message);
            } else {
                $message = "Erro desconhecido, tente novamente";
                return redirect()->back()->with('alertDontOK', $message);
            }

        } else {
            $message = "Erro, horário não alocado. Certifique-se que o horário de inicio seja antes que o horário de termino e tente novamente";
            return redirect()->back()->with('alertDontOK', $message);
        }
    }


    function deleteSchedule(Request $request)
    {
        $checkConfirm = $request->input('radios');
        $checkSchedules = $request->all();
        unset($checkSchedules['_token']);
        unset($checkSchedules['radios']);

        if ($checkConfirm == "on") {
            foreach ($checkSchedules as $key => $value) {
                $id = $key;
                DB::table('discipline_schedules')->where('id', '=', $id)->delete();
            }
            $message = "Alocação(s) deletadas com sucesso!";
            return redirect()->back()->with('alertOK', $message);
        } else {
            $message = "Você precisa confirmar que está ciente da desaloção da matéria marcando o checkbox acima do botão do botão \"desalocar\"";
            return redirect()->back()->with('alertDontOK', $message);
        }

    }
}
