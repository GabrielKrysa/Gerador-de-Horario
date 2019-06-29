<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("departament")->insert([[
            "name" => "DECOMP/G"
        ], [
            "name" => "DEMAT/G"
        ], [
            "name" => "DEADM/G"
        ]]);
    }
}
