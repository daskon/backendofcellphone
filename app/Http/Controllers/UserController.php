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

    public function uploadImage(){
        return view('users.upload');
    }

}
