<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Validator;


class UserController extends Controller
{
    public function getAllUser(){
        
        return response()->json(UserModel::get(), 200);
    }

    public function getUserById($id){
        
        $user = UserModel::find($id);
        if(is_null($user)){
            return response()->json(["message"=>"Record not found!"], 404);
        }
        return response()->json($user, 200);
    }

    public function createUser(Request $request){
        $rules = [
            'username' => 'required|min:1',
            'password' => 'required|min:1',
            'phone' => 'required|max:11',   
            
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $user = UserModel::create($request->all());
        return response()->json($user, 201);
    }

    public function updateUser(Request $request, $id){
        $user = UserModel::find($id);
        if(is_null($user)){
            return response()->json(["message"=>"Record not found!"], 404);
            $user->update($request->all());
        }
        
        return response()->json($user, 200);
    }

    public function deleteUser(Request $request, $id){
        $user = UserModel::find($id);
        if(is_null($user)){
            return response()->json(["message"=>"Record not found!"], 404);
        }else{
            $user->delete();
        }
        return response()->json(null, 204);
    }
}
