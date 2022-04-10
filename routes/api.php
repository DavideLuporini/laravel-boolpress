<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//trial api
// Route::get('/test', 'Api\PostController@index', function () {
//     $names = ['Nico', 'Pietro', 'Antonio'];

//     return response()->json(['names' => $names]);
// });

Route::namespace('Api')->group(function () {

    Route::get('/posts', 'PostController@index');
    Route::get('/posts/{id}', 'PostController@show');
    Route::post('messages', 'ContactMessageController@send');
});
