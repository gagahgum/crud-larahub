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

Route::get('/pertanyaans/create', 'PertanyaanController@create'); //menampilkan halaman form input
Route::post('/pertanyaans', 'PertanyaanController@store'); //menyimpan data
Route::get('/pertanyaans', 'PertanyaanController@index'); //menampilkan semua pertanyaan
Route::get('/pertanyaans/{id}', 'PertanyaanController@show'); //menampilkan pertanyaan berdasarkan id
Route::get('/pertanyaans/{id}/edit', 'PertanyaanController@edit'); //menampilkan edit pertanyaan berdasarkan id
Route::put('/pertanyaans/{id}', 'PertanyaanController@update'); //update pertanyaan berdasarkan id
Route::delete('/pertanyaans/{id}', 'PertanyaanController@destroy'); //menghapus pertanyaan berdasarkan id
