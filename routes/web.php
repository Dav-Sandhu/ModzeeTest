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

Route::get('/', 'App\Http\Controllers\WebpageController@main');

Route::get('/getPosts', 'App\Http\Controllers\PostsController@getPosts');
Route::post('/addPost', 'App\Http\Controllers\PostsController@addPost');

Route::get('/getUsers', 'App\Http\Controllers\UsersController@getUsers');
Route::post('/addUser', 'App\Http\Controllers\UsersController@addUser');

