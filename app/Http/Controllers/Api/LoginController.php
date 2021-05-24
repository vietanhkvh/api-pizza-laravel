<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\UserModel;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Api\LoginController;

class LoginController extends Controller
{
    public function login(Request $request) {
        $user = User::where(['username' => $request->get('username')])->first();
        
        if($user == null)
            return response()->json(['status' => Config::get('siteMsg.fails_code'), 'message' => 'Tài khoản chưa được đăng ký!']);

        else {
            if($user->password != $request->get('password'))
                return response()->json(['status' => Config::get('siteMsg.invalid_code'), 'message' => 'Sai mật khẩu!']);
            else
                return response()->json(['status' => Config::get('siteMsg.success_code'), 'data' => $user]);
        }
    }
}
