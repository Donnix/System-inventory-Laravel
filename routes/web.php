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
Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard'); 
  Route::get('logout', 'AuthController@logout');
Route::resource('level','LevelController');
Route::resource('types','TypeController');
Route::get('/laporanborrowings','LaporanborrowingController@index')->name('laporanborrowings');
Route::get('/laporanborrowings/cari','LaporanborrowingController@cari');
Route::get('/laporanborrowings/print','LaporanborrowingController@print')->name('laporanborrowings.print');
Route::get('/laporanborrowings/show','LaporanborrowingController@show')->name('laporanborrowings.show');
Route::resource('peminjaman','PeminjamanController');
Route::resource('inventarisir','InventarisirController');
Route::get('/inventarisir/cari','InventarisirController@cari');
Route::resource('pets','PetController');
Route::resource('ruangs','RuangController');
Route::resource('pegawai','PegawaiController');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

