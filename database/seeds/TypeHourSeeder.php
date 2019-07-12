<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_hours")->insert([[
            "type" => "start"
        ],[
            "type" => "end"
        ],[
            "type" => "star and end"
        ]]);
    }
}
