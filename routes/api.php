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

Route::namespace('Api')->group(function () {
    Route::post('login', 'ApiUserController@login');
    Route::post('register', 'ApiUserController@register');
    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('details', 'ApiUserController@details');
        Route::post('user/{user}', 'ApiUserController@edit');

        Route::group(['prefix' => 'child', 'middleware' => 'auth:api'], function() {
            Route::post('/', ['uses' => 'ApiChildController@addChild']);
        });

        Route::group(['prefix' => 'games', 'middleware' => 'auth:api'], function() {
            Route::get('/', ['uses' => 'ApiGamesController@get']);
            Route::get('/{game}', ['uses' => 'ApiGamesController@getOne']);
        });

        Route::group(['prefix' => 'schoolclass', 'middleware' => 'auth:api'], function() {
            Route::get('/', ['uses' => 'ApiSchoolClassController@get']);
        });

        Route::group(['prefix' => 'topics', 'middleware' => 'auth:api'], function() {
            Route::get('/', ['uses' => 'ApiTopicController@getTopics']);
        });

    });
});