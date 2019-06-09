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
    url()->forceScheme('webcal');
    return view('welcome');
});

Route::get('calendar/{code}.ics', 'StateController@ical');
Route::get('calendar/{code}', 'StateController@show');

Route::get('weeks/generate', 'WeekController@generate');
