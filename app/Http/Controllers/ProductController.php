<?php

namespace App\Http\Controllers;

use App\CellPictures;
use App\MobileDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex(){
        return view('partials.newarrival');
    }
}
