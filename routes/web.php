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
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('logout','AuthController@logout');
Route::group(['middleware'=>'auth','checkRole:admin'],function(){
Route::get('/pegawai','PegawaiController@index');
Route::post('/pegawai/create', 'PegawaiController@create');
Route::get('/pegawai/{id}/edit','PegawaiController@edit');
Route::post('/pegawai/{id}/update','PegawaiController@update');
Route::get('/pegawai/{id}/delete','PegawaiController@delete');
});
Route::group(['middleware'=>'auth','checkRole:admin,pegawai'],function(){
Route::get('/absensi', 'AbsensiController@index');
Route::post('/absensi/absen', 'AbsensiController@absen');
Route::get('/keluar', 'JamKeluar@index');
Route::post('/keluar/keluar','JamKeluar@keluar');
Route::get('/keluar/daftar','JamKeluar@daftar');
Route::get('/absensi/daftar','AbsensiController@daftar');
Route::get('/changePassword','PasswordController@showChangePasswordForm');
Route::post('/changePassword','PasswordController@changePassword');

});
