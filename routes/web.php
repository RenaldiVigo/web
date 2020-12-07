<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('/dataguru', 'Admin\GuruController');
    Route::resource('/datakelas1', 'Admin\DataKelas1Controller');
    Route::resource('/datakelas2', 'Admin\DataKelas2Controller');
    Route::resource('/datakelas3', 'Admin\DataKelas3Controller');
    Route::resource('/datakelas4', 'Admin\DataKelas4Controller');
    Route::resource('/datakelas5', 'Admin\DataKelas5Controller');
    Route::resource('/datakelas6', 'Admin\DataKelas6Controller');
    Route::resource('/datagambar', 'Admin\ImageController');
});

// tabel siswa
Route::get('kelas1', 'User\UserController@kelas1');
Route::get('kelas2', 'User\UserController@kelas2');
Route::get('kelas3', 'User\UserController@kelas3');
Route::get('kelas4', 'User\UserController@kelas4');
Route::get('kelas5', 'User\UserController@kelas5');
Route::get('kelas6', 'User\UserController@kelas6');

// sambutan
Route::get('sambutan', 'User\UserController@sambutan');
Route::get('visimisi', 'User\UserController@visimisi');
Route::get('guruall', 'User\UserController@guruall');

// Foto Kegiatan
Route::get('fotokegiatan', 'User\UserController@fotokegiatan');

// Foto Berita
Route::get('berita', 'User\UserController@berita');
