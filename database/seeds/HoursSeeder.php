<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FactoryFaker;

class HoursSeeder extends Seeder
{

    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("start_and_end_hours")->insert([[
            "hour" => "7:30",
            "type" => "start"
        ], [
            "hour" => "8:20",
            "type" => "start and end"
        ], [
            "hour" => "9:10",
            "type" => "start and ens"
        ], [
            "hour" => "10:00",
            "type" => "end"
        ], [
            "hour" => "10:10",
            "type" => "start"
        ], [
            "hour" => "11:00",
            "type" => "start and end"
        ], [
            "hour" => "11:50",
            "type" => "end"
        ], [
            "hour" => "13:20",
            "type" => "start"
        ], [
            "hour" => "14:10",
            "type" => "start and end"
        ], [
            "hour" => "15:00",
            "type" => "end"
        ], [
            "hour" => "15:10",
            "type" => "start"
        ], [
            "hour" => "16:00",
            "type" => "start and end"
        ], [
            "hour" => "16:50",
            "type" => "start and end"
        ], [
            "hour" => "17:40",
            "type" => "start and end"
        ], [
            "hour" => "18:30",
            "type" => "start and end"
        ], [
            "hour" => "18:50",
            "type" => "start"
        ], [
            "hour" => "19:40",
            "type" => "start and end"
        ], [
            "hour" => "20:30",
            "type" => "start and end"
        ], [
            "hour" => "21:20",
            "type" => "end"
        ], [
            "hour" => "21:30",
            "type" => "start and end"
        ], [
            "hour" => "22:20",
            "type" => "start and end"
        ]]);
    }
}
