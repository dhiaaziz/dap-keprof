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

 //Bahasa
Route::get('/bahasa', 'BahasaController@index');
Route::get('/addBahasa', 'BahasaController@addBahasaShow');
//FrontEnd Materi
Route::group(['prefix' => 'frontend'], function () {
        Route::get('materi', 'frontend\MateriController@index');
        Route::get('home','frontend\HomeController@index');
        Route::get('latihan','frontend\LatihanController@index');
        Route::get('forum','frontend\ForumController@index');
    });

// Latihan
Route::get('/latihan', 'LatihanController@indexLatihan');
Route::get('/addShowLatihan', 'LatihanController@addShowLatihan');
Route::post('/addLatihan', 'LatihanController@addLatihan');
Route::get('/editLatihan/{id}', 'LatihanController@editLatihan');
Route::post('/editLatihan/update', 'LatihanController@updateLatihan');
Route::get('/addShowLatihan/delete/{id}', 'LatihanController@deleteLatihan');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::GET('admin/home','AdminController@index');
Route::GET('admin',  'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');
Route::GET('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::POST('admin/register', 'Admin\RegisterController@register');
// Route::POST('logout', 'Admin\LoginController@logout');
Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
