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

Route::get('/','WargaController@index');

Route::get('/tambah','WargaController@tambah');

Route::post('/add','WargaController@add');

Route::get('/edit/{ktp}','WargaController@edit');

Route::post('/update','WargaController@update');

Route::get('/hapus/{ktp}','wargaController@hapus');
