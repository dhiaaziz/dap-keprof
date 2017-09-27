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
    return view('backend.index');
});
Route::get('materi','MateriController@indexMateri'); 
Route::get('addShow', 'MateriController@addShow');

Route::post('addMateri', 'MateriController@addMateri');
