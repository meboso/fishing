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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Googleログイン機能
Route::get('/', 'GoogleLoginController@getGoogleAuth');
Route::get('/login/callback', 'GoogleLoginController@authGoogleCallback');

//マイページ画面
Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'MypageController@mypage');

//ロッド
Route::group(['prefix' => 'rods'], function() {
Route::get('/', 'RodController@rod_lists');
Route::get('rod_create', 'RodController@rod_create');
Route::get('{rod}', 'RodController@rod_show');
Route::get('{rod}/edit', 'RodController@rod_edit');
Route::post('/', 'RodController@store');
Route::put('{rod}', 'RodController@update');
Route::delete('{rod}', 'RodController@delete');
});


//リール
Route::get('/reel', 'ReelController@reel_lists');
Route::get('/reels/reel_create', 'ReelController@reel_create');
Route::get('/reels/{reel}', 'ReelController@reel_show');
Route::post('/reels', 'ReelController@store');
Route::get('/reels/{reel}/edit', 'ReelController@reel_edit');
Route::put('/reels/{reel}', 'ReelController@update');
Route::delete('/reels/{reel}', 'ReelController@delete');

//ライン
Route::get('/line', 'LineController@line_lists');
Route::get('/lines/line_create', 'LineController@line_create');
Route::get('/lines/{mainline}', 'LineController@line_show');
Route::post('/lines', 'LineController@store');
Route::get('/lines/{mainline}/edit', 'LineController@line_edit');
Route::put('/lines/{mainline}', 'LineController@update');
Route::delete('/lines/{mainline}', 'LineController@delete');

//ルアー
Route::get('/lures', 'LureController@lure_lists');
Route::get('/lures/lure_create', 'LureController@lure_create');
Route::get('/lures/{lure}', 'LureController@lure_show');
Route::post('/lures', 'LureController@store');
Route::get('/lures/{lure}/edit', 'LureController@lure_edit');
Route::put('/lures/{lure}', 'LureController@update');
Route::delete('/lures/{lure}', 'LureController@delete');

//釣果一覧
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
});
