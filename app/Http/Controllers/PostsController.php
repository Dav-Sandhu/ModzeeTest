<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function addPost(Request $request){
        $id = $request->input('id');
        $title = $request->input('title');
        $description = $request->input('description');
        $img = $request->input('img');
        $date = $request->input('date');
        $featured = $request->input('featured');

        $data = array('id'=>$id, 'title'=>$title, 'description'=>$description, 'img'=>$img, 'date'=>$date, 'featured'=>$featured);
        return Post::insertData($data);
    }

    public function getPosts(){
        return Post::all();
    }
}
