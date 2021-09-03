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

Route::post('/shoe', 'ShoeController@createShoe');

Route::get('/shoe', 'ShoeController@getAllShoe');

Route::get('/shoe/{id}', 'ShoeController@getShoeById');

Route::put('/shoe/{id}', 'ShoeController@updateShoeById');

Route::delete('/shoe/{id}', 'ShoeController@deleteShoeById');

Route::get('/phpinfo', function(){
    phpinfo();
});


