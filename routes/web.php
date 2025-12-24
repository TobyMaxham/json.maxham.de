<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'api'], function () {
    Route::resource('/posts', PostController::class);
    Route::resource('/comments', CommentController::class);
    Route::resource('/albums', AlbumController::class);
    Route::resource('/photos', PhotoController::class);
    Route::resource('/todos', TodoController::class);
    Route::resource('/users', UserController::class);

    // todo relations
    Route::get('/posts/{id}/comments', [CommentController::class, 'getPostComments']);
});
