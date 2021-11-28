<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function getuserData($id=null){

        $value=DB::table('users')->orderBy('id', 'asc')->get(); 
        return $value;
   
    }

    public static function filterData($data){
        $users = DB::table('users')->pluck($data);
        return $users;
    }
   
    public static function insertData($data){

        $value=DB::table('users')->where('name', $data['name'])->get();

        if($value->count() == 0){
            $insert = DB::table('users')->insert([
                'name' => $data['name'], 
                'phone' => $data['phone'], 
                'email' => $data['email'],
                'bio' => $data['bio'], 
                'profile_picture' => $data['profile_picture']
            ]);
            return $insert;
          }else{
            return 0;
        }
    }
}
