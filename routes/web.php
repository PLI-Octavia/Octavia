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
Route::get('/users', 'UserController@users')->name('user')->middleware('isAdmin');
Route::get('/usersjson', 'UserController@usersJson')->name('userjson')->middleware('isAdmin');

//Games
Route::get('/games', 'GameController@games')->name('games')->middleware('isAdmin');
Route::get('/gamesjson', 'GameController@gamesJson')->name('gamesjson')->middleware('isAdmin');

//Templates
Route::get('/templates/upload/{game}', 'TemplateController@formUpload')->name('upload_template')->middleware('isAdmin');