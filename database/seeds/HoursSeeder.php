<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FactoryFaker;

class HoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("start_and_end_hours")->insert([[
            "hour" => "7:30",
            "typeId" => 1
        ], [
            "hour" => "8:20",
            "typeId" => 3
        ], [
            "hour" => "9:10",
            "typeId" => 3
        ], [
            "hour" => "10:00",
            "typeId" => 2
        ], [
            "hour" => "10:10",
            "typeId" => 1
        ], [
            "hour" => "11:00",
            "typeId" => 3
        ], [
            "hour" => "11:50",
            "typeId" => 2
        ], [
            "hour" => "13:20",
            "typeId" => 1
        ], [
            "hour" => "14:10",
            "typeId" => 3
        ], [
            "hour" => "15:00",
            "typeId" => 2
        ], [
            "hour" => "15:10",
            "typeId" => 1
        ], [
            "hour" => "16:00",
            "typeId" => 3
        ], [
            "hour" => "16:50",
            "typeId" => 3
        ], [
            "hour" => "17:40",
            "typeId" => 3
        ], [
            "hour" => "18:30",
            "typeId" => 3
        ], [
            "hour" => "18:50",
            "typeId" => 1
        ], [
            "hour" => "19:40",
            "typeId" => 3
        ], [
            "hour" => "20:30",
            "typeId" => 3
        ], [
            "hour" => "21:20",
            "typeId" => 2
        ], [
            "hour" => "21:30",
            "typeId" => 3
        ], [
            "hour" => "22:20",
            "typeId" => 2
        ]]);
    }
}
