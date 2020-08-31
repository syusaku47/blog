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

Route::get('/index', 'PostsController@index' ) ->name('posts.index');
Route::get('/new', 'PostsController@new' ) ->name('posts.new');
Route::post('/create', 'PostsController@create' ) ->name('posts.create');
Route::get('/posts/{id}', 'PostsController@show' ) ->name('posts.show');
Route::get('/posts/{id}/edit', 'PostsController@edit' ) ->name('posts.edit');
Route::post('/posts/{id}/update', 'PostsController@update' ) ->name('posts.update');
Route::post('/posts/{id}/delete', 'PostsController@destroy' ) ->name('posts.destroy');

Route::post('/comments/{id}/create', 'CommentsController@create' ) ->name('comments.create');
Route::post('/comments/{id}/destroy/{post_id}', 'CommentsController@destroy' ) ->name('comments.destroy');