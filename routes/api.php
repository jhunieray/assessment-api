<?php

use App\Http\Controllers\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('me', [AuthController::class, 'me']);
    Route::put('me', [AuthController::class, 'update']);
    Route::post('logout', [AuthController::class, 'logout']);
});
