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
Route::get('personal', 'EmployeesController@index');
Route::get('personal/create', 'EmployeesController@create');
Route::post('personal', 'EmployeesController@store');
Route::get('personal/{personal}/edit', 'EmployeesController@edit');
Route::patch('personal/{personal}', 'EmployeesController@update');
