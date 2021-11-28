<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function addUser(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $bio = $request->input('bio');
        $profile_picture = $request->input('profile_picture');

        $data = array('name'=>$name, 'phone'=>$phone, 'email'=>$email, 'bio'=>$bio, 'profile_picture'=>$profile_picture);

        return Users::insertData($data);
    }

    public function getUsers(){
        return Users::all();
    }
}
