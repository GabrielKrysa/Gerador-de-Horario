<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    /*
    Route::get('/ExcluirAlocacao', function () {
        return view('deleteAlocation');
    })->name('deleteAlocation');
    Route::get('/Alocar', function () {
        return view('alocation');
    })->name('alocation');
    Route::get('/Disciplinas', function () {
        return view('disciplines');
    })->name('disciplines');
    */
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/disciplinas/listar', 'DisciplinesController@actionAlocation')->name('DisciplineController.actionAlocation');
