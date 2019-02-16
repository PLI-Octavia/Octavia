<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('details', 'UserController@details');
    Route::post('user/{user}', 'UserController@edit');

    Route::group(['prefix' => 'games', 'middleware' => 'auth:api'], function() {
        Route::get('/', ['uses' => 'GamesController@get']);
        Route::get('/{game}', ['uses' => 'GamesController@getOne']);
    });
    Route::group(['prefix' => 'topics', 'middleware' => 'auth:api'], function() {
        Route::get('/', ['uses' => 'TopicController@getTopics']);
    });

});