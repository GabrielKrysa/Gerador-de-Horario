<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("discipline_schedules")->insert([
            "disciplineId" => 3,
            "class" => "TA",
            "teacher" => "PROFESSORA",
            "studentsCapacity" => 20,
            "startHourId" => 1,
            "endHourId" => 2,
            "dayId" => 1
        ]);
    }
}
