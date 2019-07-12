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
})->name('/');

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

Route::get('/Disciplinespdf', 'DiscplinesPdfController@getDisciplinesPdf')->name('DisciplinesPdf');
Route::get('/DisciplinesSchedulespdf', 'DisciplinesSchedulesPdfController@getDisciplinesSchedulesPdf')->name('DisciplinesSchedulesPdf');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registrarSchedule', 'DisciplineScheduleController@requestSchedule')->name('DisciplineSchedule.request');
Route::post('/deletarSchedule', 'DisciplineScheduleController@deleteSchedule')->name('DisciplineSchedule.delete');