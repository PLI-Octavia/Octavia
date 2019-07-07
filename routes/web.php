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
Route::get('/games/upload','GameController@upload')->name('upload')->middleware('isAdmin');
Route::post('/games/store','GameController@store')->name('games.store')->middleware('isAdmin');

//Templates
Route::get('/templates', 'TemplateController@templates')->name('templates')->middleware('isAdmin');
Route::get('/templates/templatesjson', 'TemplateController@templatesjson')->name('templatesjson')->middleware('isAdmin');
Route::get('/templates/upload/{game}', 'TemplateController@formUpload')->name('upload_template')->middleware('isAdmin');
Route::post('/templates/upload/{game}', 'TemplateController@formUpload')->name('upload_template')->middleware('isAdmin');
Route::get('/templates/delete/{template}', 'TemplateController@deleteTemplate')->name('delete_template')->middleware('isAdmin');