<?php

namespace App\Http\Controllers;

use App\Days;
use App\Discipline_schedules;
use App\Disciplines;
use App\SchedulesDisciplines;
use App\Start_and_end_hours;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $disciplines = Disciplines::with(['departament'])->get();
        $starEndHours = Start_and_end_hours::with(['typeHour'])->get();
        $schedules = Discipline_schedules::with(['start_hour'], ['end_hour'], ['discipline'], ['day'])->get();
        $days = Days::all();

        return view('home', [
            'disciplines' => $disciplines,
            'schedules' => $schedules,
            'hours' => $starEndHours,
            'days' => $days
        ]);
    }
}
