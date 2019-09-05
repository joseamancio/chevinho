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

Route::get('/', 'RifaController@index')->name('index');

Route::get('/rifa/{name}', 'RifaController@get')->name('rifa.index');

Route::post('/rifa/post', 'RifaController@post')->name('rifa.post');

Route::view('/regulamento', 'regulamento')->name('regulamento');
