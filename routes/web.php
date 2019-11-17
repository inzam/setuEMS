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

Route::view('/', 'employee');
Route::get('personal', 'PersonalsController@index');
Route::get('personal/create', 'PersonalsController@create');
Route::post('personal', 'PersonalsController@store');
Route::get('personal/{personal}', 'PersonalsController@show');
Route::get('personal/{personal}/edit', 'PersonalsController@edit');
Route::patch('personal/{personal}', 'PersonalsController@update');
Route::delete('personal/{personal}', 'PersonalsController@destroy');

