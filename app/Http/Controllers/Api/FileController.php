<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function downloadImage(){
        return response()->download(public_path('profile.png'), 'User Image');
    }
    public function updateImage(Request $request){
        $fileName = "profile.png";
        $path = $request -> file('photo')->move(public_path("/"), $fileName);
        $photoURL = url('/'.$fileName);
        return response()->json(['url' => $photoURL], 200); 
    }
}
