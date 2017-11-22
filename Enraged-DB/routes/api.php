<?php

use App\User;
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


Route::post('/user', 'UserController@register')->middleware('auth:api');
Route::get('/user/{id}', 'UserController@getProfile')->middleware('auth:api');
Route::post('/twitter', 'TwitterController@postTwitterProfile')->middleware('auth:api');
Route::get('/twitter/{twitterId}', 'TwitterController@getTwitterProfile')->middleware('auth:api');
