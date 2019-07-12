<?php

namespace App\Http\Controllers;

use App\Days;
use App\Discipline_schedules;
use App\Start_and_end_hours;
use PDF;

class DisciplinesSchedulesPdfController extends Controller
{
    public function getDisciplinesSchedulesPdf()
    {
        $schedules = Discipline_schedules::with(['start_hour'], ['end_hour'], ['discipline'], ['day'])->get();
        $hours = Start_and_end_hours::all();
        $days = Days::all();

        return PDF::loadView('PDF.DisciplinesSchedulesPdfGenerate', compact('schedules'), compact('hours'))
            ->setPaper('a4', 'portrait')
            ->download('horarios-ciencia-da-computacao-unicentro-2019.pdf');
    }
}
