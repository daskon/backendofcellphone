<?php

namespace App\Http\Controllers;

use App\CellPictures;
use App\MobileDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleProductController extends Controller
{
    public function getProduct($id){

        $cellPics = DB::table('cell_pictures')->where('item_id',$id)->get();
        $cellInfo = DB::table('mobile_details')->where('item_id',$id)->get();

        foreach($cellInfo as $object){
          $spec = unserialize($object->specifications);
            return view('single-product',['cellPics' => $cellPics ,'cellInfo' => $cellInfo,'spec' => $spec]);
        }

    }
}
