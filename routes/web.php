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
Route::post('/addBahasa', 'BahasaController@addBahasa');
Route::get('/editBahasa/{id}', 'BahasaController@editBahasa');
Route::get('/deleteBahasa/{id}', 'BahasaController@deleteBahasa');
Route::post('/updateBahasa/{id}', 'BahasaController@updateBahasa');


//FrontEnd
Route::group(['prefix' => 'frontend'], function () {
        Route::get('materi', 'frontend\MateriController@index');
        Route::get('home','frontend\HomeController@index');
        Route::get('latihan','frontend\LatihanController@index');
        Route::get('forum','frontend\ForumController@index');
        Route::get('forum/tampil/{id}','frontend\ForumController@tampil');
        Route::get('forum/tanya','frontend\ForumController@tanya');
        Route::post('/forum/addTanya', 'frontend\ForumController@storePertanyaan');
        Route::get('forum/bagi','frontend\ForumController@bagi');
        Route::post('/forum/addBagi', 'frontend\ForumController@storeBagi');
        Route::post('/forum/addKomentar', 'frontend\ForumController@storeKomentar');
        Route::get('submateri/{id_materi}', 'frontend\SubMateriController@tampilSub');
        Route::get('latihantampil/{id_materi}', 'frontend\LatihanController@tamplilLatihan');


    });


// Latihan
Route::get('/latihan', 'LatihanController@indexLatihan');
Route::get('/addShowLatihan', 'LatihanController@addShowLatihan');
Route::post('/addLatihan', 'LatihanController@addLatihan');
Route::get('/editLatihan/{id}', 'LatihanController@editLatihan');
Route::post('/editLatihan/update', 'LatihanController@updateLatihan');
Route::get('/addShowLatihan/delete/{id}', 'LatihanController@deleteLatihan');

//kelola user
Route::get('/user' , 'UserController@indexUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('admin/home','AdminController@index');
Route::get('admin',  'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');
Route::post('admin/logout', 'Admin\LoginController@logout');
// Route::post('logout', 'Admin\LoginController@logout');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

//email
 Route::get('/sendEmailDone/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

 //verifikasi akun
 Route::get('/verifikasiakun','Auth\RegisterController@verifikasi');
