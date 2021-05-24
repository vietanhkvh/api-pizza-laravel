<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\UserController;
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
Route::get('user', [UserController::class, 'index']);

Route::get('user/{id}', [UserController::class, 'show']);

Route::post('user', [UserController::class, 'store']);

Route::put('user/{id}', [UserController::class, 'update']);

Route::delete('user/{id}', [UserController::class, 'destroy']);

// //User
// Route::apiResource('user', 'App\Http\Controllers\Api\UserController');


//Type
Route::apiResource('type', 'App\Http\Controllers\Api\TypeController');

//download image
Route::get('file/image', 'App\Http\Controllers\Api\FileController@downloadImage');
//update image
Route::post('file/image', 'App\Http\Controllers\Api\FileController@updateImage');

// Login
Route::post('login', 'App\Http\Controllers\Api\LoginController@login');