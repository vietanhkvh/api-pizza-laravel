<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;

class RegisterController extends Controller
{
    public function register(Request $req){
        $user= new UserModel();
        $user->username= $req->input('userName');
        $user->password= Hash::make($req->input('password'));
        $user->name= $req->input('name');
        $user->email= $req->input('email');
        $user->address= $req->input('address');
        $user->phone= $req->input('phone');
        $user->role= $req->input('role');
        $user->save();

        return $user;
    }
}
