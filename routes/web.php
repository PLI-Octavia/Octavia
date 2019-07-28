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
Route::get('/', 'HomeController@index')->name('home');
Route::post('/create', 'HomeController@create')->name('create');

//Users
Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@users')->name('user.list')->middleware('isAdmin');
    Route::get('/usersjson', 'UserController@usersJson')->name('user.json')->middleware('isAdmin');
});

//Games
Route::group(['prefix' => 'games'], function () {
    Route::get('/', 'GameController@games')->name('games.list')->middleware('isAdmin');
    Route::get('/gamesjson', 'GameController@gamesJson')->name('games.json')->middleware('isAdmin');
    Route::get('/upload','GameController@upload')->name('game.upload')->middleware('isAdmin');
    Route::post('/store','GameController@store')->name('games.store')->middleware('isAdmin');
});

//Templates
Route::group(['prefix' => 'templates'], function () {
    Route::get('/', 'TemplateController@templates')->name('templates.list')->middleware('isAdmin');
    Route::get('/templatesjson', 'TemplateController@templatesjson')->name('templates.json')->middleware('isAdmin');
    Route::get('/upload/{game}', 'TemplateController@formUpload')->name('upload_template')->middleware('isAdmin');
    Route::post('/upload/{game}', 'TemplateController@formUpload')->name('upload_template')->middleware('isAdmin');
    Route::get('/delete/{template}', 'TemplateController@deleteTemplate')->name('delete_template')->middleware('isAdmin');
});