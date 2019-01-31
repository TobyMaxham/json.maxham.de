<?php

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
})->middleware('cors');


Route::group(['middleware' => 'cors'], function () {
    Route::resource('/posts', 'PostController');
    Route::resource('/comments', 'CommentController');
    Route::resource('/albums', 'AlbumController');
    Route::resource('/albums', 'AlbumController');
    Route::resource('/photos', 'PhotoController');
    Route::resource('/todos', 'TodoController');
    Route::resource('/users', 'UserController');

    // todo relations
    Route::get('/posts/{id}/comments', 'CommentController@getPostComments');
});
