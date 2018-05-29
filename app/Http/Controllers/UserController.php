<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\handler;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcome;

class UserController extends Controller
{
    public function MobileDetails() {
       return $this->hasMany('App\MobileDetails');
    }

    public function getLogin(){
        return view('users.login');
    }

    public function getRegister(){
        return view('users.register');
    }

    public function getMyAccount($id) {
        return view('users.my-account');
    }

    public function uploadImage($id){

            $uploader = new UploadHandler();

            // Specify the list of valid extensions, ex. array("jpeg", "xml", "bmp")
            $uploader->allowedExtensions = array(); // all files types allowed by default

            // Specify max file size in bytes.
            $uploader->sizeLimit = null;

            // Specify the input name set in the javascript.
            $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default

            // If you want to use the chunking/resume feature, specify the folder to temporarily save parts.
            $uploader->chunksFolder = "chunks";

            $method = ismethod();

            if ($method == "POST") {
            header("Content-Type: text/plain");

            // Assumes you have a chunking.success.endpoint set to point here with a query parameter of "done".
            // For example: /myserver/handlers/endpoint.php?done
            if (isset($_GET["done"])) {
                $result = $uploader->combineChunks("files");
            }
            // Handles upload requests
            else {
                // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
                $result = $uploader->handleUpload("img/product");

                // To return a name used for uploaded file you can use the following line.
                $result["uploadName"] = $uploader->getUploadName();

            }

            echo json_encode($result);
            }
            // for delete file requests
            else if ($method == "DELETE") {
            $result = $uploader->handleDelete("files");
            echo json_encode($result);
            }
            else {
            header("HTTP/1.0 405 Method Not Allowed");
            }
    }

    public function storeUser(Request $request){

        $this->validate($request,[
            'input-first' => 'required',
            'input-last' => 'required',
            'input-email' => 'email|required|unique:users',
            'select-location' => 'required',
            'select-division' => 'required',
            'input-password' => 'required|min:8',
            'input-repassword' => 'required|min:8'
        ]);

        $user = new User([
            'first' => $request->input('input-first'),
            'last'  => $request->input('input-last'),
            'email' => $request->input('input-email'),
            'location' => $request->input('select-location'),
            'sub_location' => $request->input('select-division'),
            'password' => bcrypt($request->input('input-password'))
        ]);

        $user->save();

        //$email = $request->input('input-email');

        //Mail::to($email)->send(new NewUserWelcome());

         return redirect()->back();
    }

}
