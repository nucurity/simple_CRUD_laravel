<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/weeks','WeekController@index');
Route::get('/weeks/create', 'WeekController@create');
Route::get('/weeks/delete/{id}' , 'WeekController@destroy');

Route::get('/weeks/edit/{id}' , 'WeekController@edit');
Route::post('/weeks/edit/{id}', 'WeekController@update');
Route::post('/weeks/create', 'WeekController@store');

Route::get('/weeks/{id}', 'WeekController@show');