<?php

use App\Http\Controllers\Api\ResultadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('resultados', ResultadoController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
