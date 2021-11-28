<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Users;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', 'App\Http\Controllers\APIController@getUsers');
Route::get('/albums', 'App\Http\Controllers\APIController@getAlbums');

Route::post('/users', function(){
    return Users::filterData([
        'name' => request('name'),
        'phone' => request('phone'),
        'email' => request('email'),
        'bio' => request('bio'),
        'profile_picture' => request('profile_picture')
    ]);
});

Route::post('/albums', function(){
    return Post::filterData([
        'id' => request('id'),
        'title' => request('title'),
        'description' => request('decription'),
        'img' => request('img'),
        'date' => request('date'),
        'featured' => request('featured')
    ]);
});