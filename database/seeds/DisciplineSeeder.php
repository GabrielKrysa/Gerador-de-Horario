<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("disciplines")->insert([[
            "code" => "2302",
            "departamentId" => 1,
            "name" => "Computadores e Sociedade",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2303",
            "departamentId" => 2,
            "name" => "Geometria Analítica e Vetores",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2304",
            "departamentId" => 1,
            "name" => "Introdução à Ciência da Computação I",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2305",
            "departamentId" => 1,
            "name" => "Lógica para Computação",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2306",
            "departamentId" => 1,
            "name" => "Organização de Computadores",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2307",
            "departamentId" => 2,
            "name" => "Pré-Cálculo",
            "idealYear" => 1,
            "semester" => 1
        ], [
            "code" => "2308",
            "departamentId" => 1,
            "name" => "Programação de Computadores I",
            "idealYear" => 1,
            "semester" => 1
        ],
            // SECOND SEMESTER, FIRST YEAR
            [
                "code" => "2309",
                "departamentId" => 3,
                "name" => "Álgebra Linear",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2310",
                "departamentId" => 2,
                "name" => "Calculo I ",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2311",
                "departamentId" => 2,
                "name" => "Fundamentos Matemáticos para Computação",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2312",
                "departamentId" => 1,
                "name" => "Introdução à Ciência da Computação II ",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2313",
                "departamentId" => 1,
                "name" => "Lógica Digital ",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2314",
                "departamentId" => 1,
                "name" => "Programação de Computadores II",
                "idealYear" => 1,
                "semester" => 2
            ], [
                "code" => "2315",
                "departamentId" => 1,
                "name" => "Sistemas de Informação ",
                "idealYear" => 1,
                "semester" => 2
            ],
            //Second Year, First Semester
            [
                "code" => "2316",
                "departamentId" => 1,
                "name" => "Algoritmos e Estruturas de Dados I",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2317",
                "departamentId" => 1,
                "name" => "Arquitetura de Computadores",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2318",
                "departamentId" => 1,
                "name" => "Banco de Dados I",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2319",
                "departamentId" => 2,
                "name" => "Cálculo II",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2320",
                "departamentId" => 1,
                "name" => "Engenharia de Software I",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2321",
                "departamentId" => 1,
                "name" => "Metodologia Científica para Computação ",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2322",
                "departamentId" => 2,
                "name" => "Probabilidade e Estatística ",
                "idealYear" => 2,
                "semester" => 1
            ], [
                "code" => "2323",
                "departamentId" => 1,
                "name" => "Programação Orientada a Objetos I",
                "idealYear" => 2,
                "semester" => 1
            ],
            //Second Year, Second Semester
            [
                "code" => "2324",
                "departamentId" => 1,
                "name" => "Algoritmos e Estruturas de Dados II",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2325",
                "departamentId" => 1,
                "name" => "Banco de Dados II",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2326",
                "departamentId" => 1,
                "name" => "Cálculo Numérico",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2327",
                "departamentId" => 1,
                "name" => "Engenharia de Software II ",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2328",
                "departamentId" => 1,
                "name" => "Linguagens Formais e Autômatos",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2329",
                "departamentId" => 1,
                "name" => "Programação Orientada a Objetos II",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2330",
                "departamentId" => 1,
                "name" => "Redes de Computadores I ",
                "idealYear" => 2,
                "semester" => 2
            ], [
                "code" => "2331",
                "departamentId" => 1,
                "name" => "Sistemas Operacionais I",
                "idealYear" => 2,
                "semester" => 2
            ],]);
    }
}
