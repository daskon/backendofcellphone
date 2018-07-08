<?php

namespace App\Http\Controllers;

use App\CellPictures;
use App\MobileDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex(){

        $image = CellPictures::all();
        $details = MobileDetails::all();


        return view('partials.newarrival',['image' => $image , 'details' => $details]);
    }
}
