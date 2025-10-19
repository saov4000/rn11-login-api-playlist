<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\AuthController;

Route::apiResource('musicas',MusicaController::class);
Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', fn(Request $request) => $request->user());
        Route::post('/logout',  [AuthController::class, 'logout']);
    });
});