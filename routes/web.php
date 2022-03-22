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

//マイページ画面
Route::get('/mypages', 'MypageController@mypage');
//プロフィール編集画面表示
Route::get('/mypages/{mypage}/edit', 'MypageController@mp_edit');
//プロフィール編集実行
Route::put('/mypages/{mypage}', 'MypageController@update');
//竿一覧画面
/*
Route::get('/rods', 'RodController@rod_lists');
Route::get('/rods/rod_create', 'RodController@rod_create');
Route::get('/rods/{rod}', 'RodController@rod_show');
*/
Route::group(['prefix' => 'rods'], function() {
Route::get('/', 'RodController@rod_lists');
Route::get('rod_create', 'RodController@rod_create');
Route::get('{rod}', 'RodController@rod_show');
Route::get('{rod}/edit', 'RodController@rod_edit');
});
//竿登録画面
Route::post('/rods', 'RodController@store');
//竿一覧編集画面表示
//Route::get('/rods/{rod}/edit', 'RodController@rod_edit');
//竿一覧編集実行
Route::put('/rods/{rod}', 'RodController@update');
//竿削除処理
Route::delete('/rods/{rod}', 'RodController@delete');

//リール一覧画面
Route::get('/reel', 'ReelController@reel_lists');
Route::get('/reels/reel_create', 'ReelController@reel_create');
Route::get('/reels/{reel}', 'ReelController@reel_show');
//リール登録画面
Route::post('/reels', 'ReelController@store');
//リール一覧編集画面表示
Route::get('/reels/{reel}/edit', 'ReelController@reel_edit');
//リール一覧編集実行
Route::put('/reels/{reel}', 'ReelController@update');
//リール削除処理
Route::delete('/reels/{reel}', 'ReelController@delete');

//ライン一覧画面
Route::get('/line', 'LineController@line_lists');
Route::get('/lines/line_create', 'LineController@line_create');
Route::get('/lines/{mainline}', 'LineController@line_show');
//ライン登録画面
Route::post('/lines', 'LineController@store');
//ライン一覧編集画面表示
Route::get('/lines/{mainline}/edit', 'LineController@line_edit');
//ライン一覧編集実行
Route::put('/lines/{mainline}', 'LineController@update');
//ライン削除処理
Route::delete('/lines/{mainline}', 'LineController@delete');

//ルアー一覧画面
Route::get('/lures', 'LureController@lure_lists');
Route::get('/lures/lure_create', 'LureController@lure_create');
Route::get('/lures/{lure}', 'LureController@lure_show');
//ルアー登録画面
Route::post('/lures', 'LureController@store');
//ルアー一覧編集画面表示
Route::get('/lures/{lure}/edit', 'LureController@lure_edit');
//ルアー一覧編集実行
Route::put('/lures/{lure}', 'LureController@update');
//ルアー削除処理
Route::delete('/lures/{lure}', 'LureController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
