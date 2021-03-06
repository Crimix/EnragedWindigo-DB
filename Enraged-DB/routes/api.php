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


//Route::post('/user', 'UserController@register');
//Route::get('/user/{id}', 'UserController@getProfile');

Route::post('/twitter', 'TwitterController@postTwitterProfile');
Route::put('/twitter/add_follower', 'TwitterController@addTwitterFollower');
Route::put('/twitter/finalize', 'TwitterController@finalizeTwitterProfile');
Route::get('/twitter/has/{twitterName}', 'TwitterController@hasTwitterProfile');
Route::get('/twitter/has-id/{twitterId}', 'TwitterController@hasTwitterProfileById');
Route::get('/twitter/{twitter}', 'TwitterController@getTwitterProfile');
