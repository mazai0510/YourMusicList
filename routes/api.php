<?php

use Illuminate\Http\Request;

Route::post('/register', 'Auth\RegisterController@register')->name('register');
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('auth:api')->get('/user', 'Auth\middleware@user');

Route::get('/list', 'Api\YoutubeController@getListByChannelId');

Route::resource('/playlist', 'Api\PlaylistController',['only'=>['index','store']]);

Route::get('/getlogininfo', 'Api\LoginInfoController@GetLoginInfo');
