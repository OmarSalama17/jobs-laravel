<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [jobController::class, "index"]);
Route::get('/post', [PostController::class, "index"]);
Route::get('/post/{id}', [PostController::class, "show"]);
Route::get('/post/create', [PostController::class, "create"]);

Route::get("/comments", [CommentController::class, 'index']);
Route::get("/comments/create", [CommentController::class, 'create']);
