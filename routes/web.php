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

//Home

// Materi
Route::get('/materi','MateriController@indexMateri');
Route::get('/addShow', 'MateriController@addShow');
Route::post('/addMateri', 'MateriController@addMateri');
Route::get('/editMateri/{id}', 'MateriController@editMateri');
Route::post('/editMateri/update', 'MateriController@updateMateri');
Route::get('/addShow/delete/{id}', 'MateriController@deleteMateri');

// SubMateri
Route::get('/subMateri', 'SubMateriController@indexSub');
Route::get('/addShowSub', 'SubMateriController@addShowSub');
Route::post('/addSubMateri', 'SubMateriController@addSubMateri');
Route::get('/editSubMateri/{id}', 'SubMateriController@editSubMateri');
Route::post('/editSubMateri/update', 'SubMateriController@updateSubMateri');
Route::get('/addShowSub/delete/{id}', 'SubMateriController@deleteSubMateri');


//FrontEnd Materi
Route::group(['prefix' => 'frontend'], function () {
        Route::get('materi', 'frontend\MateriController@index');
        Route::get('home','frontend\HomeController@index');
    });
