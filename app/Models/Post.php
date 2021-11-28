<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getuserData($id=null){

        $value=DB::table('posts')->orderBy('id', 'asc')->get(); 
        return $value;
   
    }

    public static function filterData($data){
        $users = DB::table('posts')->pluck($data);
        return $users;
    }
   
    public static function insertData($data){

        $featured = 0;
        if (filter_var($data['featured'], FILTER_VALIDATE_BOOLEAN) == 1){
            $featured = 1;
        }

        $value=DB::table('posts')->where('id', $data['id'])->get();
        if($value->count() == 0){
            $insertid = DB::table('posts')->insert([
                'id' => intval($data['id']), 
                'title' => $data['title'], 
                'description' => $data['description'], 
                'img' => $data['img'],
                'date' => $data['date'], 
                'featured' => $featured
            ]);
            return $insertid;
          }else{
            return 0;
        }
    }
}
