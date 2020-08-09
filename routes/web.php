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
    return view('master');
});

//Matakuliah
Route::get('/matkul', 'MatkulController@matkul');
Route::get('/tambah_matkul', 'MatkulController@tambah');
Route::post('/matkul/create', 'MatkulController@create');
Route::get('/matkul/edit/{kode_matakuliah}', 'MatkulController@edit');
Route::post('/matkul/update/{kode_matakuliah}', 'MatkulController@update');
Route::get('/matkul/{kode_matakuliah}/delete', 'MatkulController@delete');

//Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/tambah_mahasiswa', 'MahasiswaController@tambah');
Route::post('/mahasiswa/create', 'MahasiswaController@create');
Route::get('/mahasiswa/edit/{nim}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update/{nim}', 'MahasiswaController@update');
Route::get('/mahasiswa/{nim}/delete', 'MahasiswaController@delete');