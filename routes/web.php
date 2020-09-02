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
    return view('top');
});


// ホーム画面を表示するルーティング
Route::get('home', 'HomeController@index')->name('home');

// タイムライン画面のルーティング
Route::get('timeline', 'Admin\TimelineController@index')->name('timeline');



Route::group(['prefix' => 'user'], function(){
    // プロフィールの情報追加画面
    Route::get('profile', 'Admin\ProfileController@add')->name('profile');
    
});

// 問題を作成するルーティング
Route::get('question/create', 'Question\CreateController@add')->name('question/create');

//コメントを投稿するルーティング
Route::get('comment/toukou', 'Comment\ToukouController@add')->name('comment/toukou');

//コメントを表示するルーティング
Route::get('comment/hyouji', 'Comment\HyoujiController@add')->name('comment/hyouji');

//問題を解答するルーティング
Route::get('question/answer', 'Question\AnswerController@add')->name('question/answer');

//正誤を表示するルーティング
Route::get('seigohyouji', 'SeigohyoujiController@index')->name('seigohyouji');

Auth::routes();
