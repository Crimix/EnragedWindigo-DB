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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/twitter', function (Request $request) {
    return $request->user();
});


Route::post('/user/post', 'UserConstroller@register');
Route::get('/user/get/{id}', 'UserConstroller@getProfile');
Route::get('/twitter/get/{twitterId}', 'TwitterController@getTwitterProfile');
Route::post('/twitter/post', 'TwitterController@postTwitterProfile');