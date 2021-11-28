<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Users;


use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getAlbums(){
        return response()->json(Post::get(), 200);
    }

    public function getUsers(){
        return response()->json(Users::get(), 200);
    }
}
