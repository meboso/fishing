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
Route::get('/rod', 'RodController@rod_lists');
Route::get('/rods/rod_create', 'RodController@rod_create');
Route::get('/rods/{rod}', 'RodController@rod_show');
//竿登録画面
Route::get('/rods', 'RodController@store');
Route::post('/rods', 'RodController@store');
//竿一覧編集画面表示
Route::get('/rods/{rod}/edit', 'RodController@rod_edit');
//竿一覧編集実行
Route::put('/rods/{rod}', 'RodController@update');
//竿削除処理
Route::delete('/rods/{rod}', 'RodController@delete');

//リール一覧画面
Route::get('/reel', 'ReelController@reel_lists');
Route::get('/reels/reel_create', 'ReelController@reel_create');
Route::get('/reels/{reel}', 'ReelController@reel_show');
//リール登録画面
Route::get('/reels', 'ReelController@store');
Route::post('/reels', 'ReelController@store');
//リール一覧編集画面表示
Route::get('/reels/{reel}/edit', 'ReelController@reel_edit');
//リール一覧編集実行
Route::put('/reels/{reel}', 'ReelController@update');
//リール削除処理
Route::delete('/reels/{reel}', 'ReelController@delete');