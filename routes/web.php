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

Route::get('94384/student', 'ProjectController@student');

Route::get('94384/fees', 'ProjectController@fees');

Route::resource('studentIndex','StudentController');

Route::resource('feesIndex','FeesController');

Route::post('store','StudentController@store');
