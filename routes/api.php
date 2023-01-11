<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersController;

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

Route::apiResource('users', UsersController::class);

Route::get('/follow', [App\Http\Controllers\API\UsersController::class, 'searchByFollower']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
