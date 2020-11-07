<?php

use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\VehicleController;

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

Route::group([
    'middleware' => ['cors'],
], function () {
    Route::post('/login', ['uses' => AuthController::class.'@login']);

    Route::post('/student', ['uses' => StudentController::class.'@create']);
    Route::delete('/student/{id}', ['uses' => StudentController::class.'@delete']);
    Route::get('/student', ['uses' => StudentController::class.'@search']);
    Route::get('/student/{id}', ['uses' => StudentController::class.'@get']);
    Route::put('/student/{id}', ['uses' => StudentController::class.'@update']);

    Route::post('/vehicles', ['uses' => VehicleController::class.'@create']);
    Route::delete('/vehicles/{id}', ['uses' => VehicleController::class.'@delete']);
    Route::get('/vehicles', ['uses' => VehicleController::class.'@search']);
    Route::put('/vehicles/{id}', ['uses' => VehicleController::class.'@update']);
});