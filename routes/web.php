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

Route::get('record', 'RecordController@index');

Route::get('record/create', 'RecordController@create');
Route::post('record/create', 'RecordController@store');

Route::get('record/edit/{id}', 'RecordController@edit');
Route::post('record/edit/{id}', 'RecordController@update');

Route::get('record/destroy/{id}', 'RecordController@destroy');