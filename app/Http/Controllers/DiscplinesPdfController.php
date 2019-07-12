<?php

namespace App\Http\Controllers;

use App\Disciplines;
use App\Start_and_end_hours;

class DiscplinesPdfController extends Controller
{
    public function getDisciplinesPdf()
    {
        $disciplines = Disciplines::with(['departament'])->get();
        return \PDF::loadView('PDF.DiscplinesPdfGenerate', compact('disciplines'))
            ->setPaper('a4', 'landscape')
            ->download('disciplinas-ciencia-da-computacao-unicentro-2019.pdf');
    }
}
