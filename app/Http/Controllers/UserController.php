<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin(){
        return view('users.login');
    }

    public function getMyAccount() {
        return view('users.my-account');
    }

    public function storeImage(Request $request){

        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);


        return response()->json(['uploaded' => '/upload/'.$imageName]);
    }
}
