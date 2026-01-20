<?php


use App\Http\Controllers\api\PostApiController;
// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::apiResource('post', PostApiController::class);
