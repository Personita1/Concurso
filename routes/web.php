<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/sorteo', function () {
    return view('sorteo');
});
Route::get('/informes', function () {
    return view('informes');
});

/*
    Para guardar la información
*/
Route::post('/agregarConcursante', 'ConcursanteController@store');

//Para elegir a los ganadores
Route::post('/sortear','SorteoController@pick');