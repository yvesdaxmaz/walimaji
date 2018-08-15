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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
=======
Route::get('Trader','WelcomeController@getTrader');
Route::get('Producer','WelcomeController@getProducer');
Route::get('Transformer','WelcomeController@getTransformer');
Route::get('Provider','WelcomeController@getProvider');
>>>>>>> parent of f291082... [UPDATE] add new end point for registration
