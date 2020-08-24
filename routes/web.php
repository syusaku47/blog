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

Route::get('/index', 'PostController@index' ) ->name('post.index');
Route::get('/new', 'PostController@new' ) ->name('post.new');
Route::get('/create', 'PostController@create' );
Route::get('/post/{id}', 'PostController@show' ) ->name('post.show');
Route::get('/post/{id}/edit', 'PostController@edit' ) ->name('post.edit');
Route::get('/post/{id}/update', 'PostController@update' );
Route::get('/post/{id}/delete', 'PostController@delete' );
