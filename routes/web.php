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

//竿一覧画面
Route::get('/', 'RodController@rod_lists');


Route::get('/rods/rod_create', 'RodController@rod_create');
Route::get('/rods/{rod}', 'RodController@rod_show');

//竿登録画面
Route::get('/rods', 'RodController@store');
Route::post('/rods', 'RodController@store');