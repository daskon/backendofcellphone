<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function getProduct(){
        return view('single-product');
    }
}
