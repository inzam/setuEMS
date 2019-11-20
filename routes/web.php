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
//personal info
Route::get('personal', 'PersonalsController@index')->middleware('auth');
Route::get('personal/create', 'PersonalsController@create')->middleware('auth');
Route::post('personal', 'PersonalsController@store')->middleware('auth');
Route::get('personal/{personal}', 'PersonalsController@show')->middleware('auth');
Route::get('personal/{personal}/edit', 'PersonalsController@edit')->middleware('auth');
Route::patch('personal/{personal}', 'PersonalsController@update')->middleware('auth');
Route::delete('personal/{personal}', 'PersonalsController@destroy')->middleware('auth');

//official info
Route::get('official', 'OfficialsController@index')->middleware('auth');
Route::get('official/create', 'OfficialsController@create')->middleware('auth');
Route::post('official', 'OfficialsController@store')->middleware('auth');
Route::get('official/{official}', 'OfficialsController@show')->middleware('auth');
Route::get('official/{official}/edit', 'OfficialsController@edit')->middleware('auth');
Route::patch('official/{official}', 'OfficialsController@update')->middleware('auth');
Route::delete('official/{official}', 'OfficialsController@destroy')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
