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

Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan tabel berisi data pertanyaan

Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan halaman form untuk membuat pertanyaan baru

Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data baru ke tabel pertanyaan

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); //menampilkan jawaban dari pertanyaan dg id tertentu

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //menyimpan jawaban baru untuk pertanyaan dengan id tertentu

Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan tabel berisi detail pertanyaan

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); //menampilkan form untuk mengedit pertanyaan

Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //menyimpan hasil edit pertanyaan

Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete'); //meenghapus pertanyaan