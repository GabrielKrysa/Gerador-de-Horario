<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("days")->insert([[
            "day" => "Segunda-Feira"
        ], [
            "day" => "Terça-Feira"
        ], [
            "day" => "Quarta-Feira"
        ], [
            "day" => "Quinta-Feira"
        ], [
            "day" => "Sexta-Feira"
        ]]);
    }
}
