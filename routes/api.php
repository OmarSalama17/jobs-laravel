<?php


use App\Http\Controllers\api\PostApiController;
use App\Http\Controllers\api\AuthController;
// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::apiResource('post', PostApiController::class,)->middleware('auth:api');


Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:api')->group(function () {
        Route::post("refresh", [AuthController::class, 'refresh']);
        Route::get('me', [AuthController::class, 'me']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
