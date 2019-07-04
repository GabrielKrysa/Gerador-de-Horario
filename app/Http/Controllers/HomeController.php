<?php

namespace App\Http\Controllers;

use App\Disciplines;
use Illuminate\Http\Request;

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

        return view('home', [
            'disciplines' => $disciplines
        ]);
    }
}
