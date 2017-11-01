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

Route::post('/user/post', 'UserController@register')->middleware('auth:api');
Route::get('/user/get/{id}', 'UserController@getProfile')->middleware('auth:api');
Route::get('/twitter/get/{twitterId}', 'TwitterController@getTwitterProfile')->middleware('auth:api');
Route::post('/twitter/post', 'TwitterController@postTwitterProfile')->middleware('auth:api');