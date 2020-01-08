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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('logins','AuthController');
Route::resource('register','AuthController');
Route::resource('level','LevelController');
Route::resource('jenis','JenisController');
Route::resource('crew','CrewController');
Route::get('/crew/create', 'CrewController@create')->name('create');
Route::resource('peminjaman','PeminjamanController');
Route::resource('inventarisir','InventarisirController');
Route::resource('pets','PetController');
Route::resource('ruangs','RuangController');
