<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});//->middleware('cors');


Route::group(['middleware' => 'api'], function () {
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/comments', \App\Http\Controllers\CommentController::class);
    Route::resource('/albums', \App\Http\Controllers\AlbumController::class);
    Route::resource('/photos', \App\Http\Controllers\PhotoController::class);
    Route::resource('/todos', \App\Http\Controllers\TodoController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class);

    // todo relations
    Route::get('/posts/{id}/comments', [\App\Http\Controllers\CommentController::class, 'getPostComments']);
});
