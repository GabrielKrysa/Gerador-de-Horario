<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DaysSeeder::class,
            TypeHourSeeder::class,
            HoursSeeder::class,
            DepartamentSeeder::class,
            DisciplineSeeder::class,
            DisciplineScheduleSeeder::class
        ]);
    }
}
