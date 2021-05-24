<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pizzaAPI;
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

// User
// Route::get('user', 'App\Http\Controllers\UserController@getAllUser');
// Route::get('user/{id}', 'App\Http\Controllers\UserController@getUserById');
// Route::post('user', 'App\Http\Controllers\UserController@createUser');
// Route::put('user/{id}', 'App\Http\Controllers\UserController@updateUser');
// Route::delete('user/{id}', 'App\Http\Controllers\UserController@deleteUser');

Route::apiResource('user', 'App\Http\Controllers\Api\UserController');
//download image
Route::get('file/image', 'App\Http\Controllers\Api\FileController@downloadImage');
//update image
Route::post('file/image', 'App\Http\Controllers\Api\FileController@updateImage');