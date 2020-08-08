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
    return view('home');
});

Route::get('/data-tables', function () {
    return view('datatables');
});

Route::get('/pertanyaan/create', 'Pertanyaan@create');
Route::post('/pertanyaan', 'Pertanyaan@store');
Route::get('/pertanyaan', 'Pertanyaan@index');
Route::get('/pertanyaan/{id}', 'Pertanyaan@show');
Route::get('/pertanyaan/{id}/edit', 'Pertanyaan@edit');
Route::put('/pertanyaan/{id}', 'Pertanyaan@update');
Route::delete('/pertanyaan/{id}', 'Pertanyaan@destroy');
