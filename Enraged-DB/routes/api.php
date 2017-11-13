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


Route::post('/user', 'UserController@register');
Route::get('/user/{id}', 'UserController@getProfile');
Route::post('/twitter', 'TwitterController@postTwitterProfile');
Route::get('/twitter/{twitterId}', 'TwitterController@getTwitterProfile');
