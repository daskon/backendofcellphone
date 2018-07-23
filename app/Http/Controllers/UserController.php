<?php

namespace App\Http\Controllers;

use App\CellPictures;
use App\User;
use Illuminate\Http\Request;
use App\handler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcome;

use Illuminate\Support\Facades\Auth;

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

    public function getMyAccount() {
        return view('users.my-account');
    }

    public function uploadImage($id){

        $itemID = DB::table('mobile_details')->where('user_id', $id)->value('item_id');

            $uploader = new handler();

            // Specify the list of valid extensions, ex. array("jpeg", "xml", "bmp")
            $uploader->allowedExtensions = array(); // all files types allowed by default

            // Specify max file size in bytes.
            $uploader->sizeLimit = 12225;

            // Specify the input name set in the javascript.
            $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default

            // If you want to use the chunking/resume feature, specify the folder to temporarily save parts.
            $uploader->chunksFolder = "chunks";

            $method = $uploader->ismethod();

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

                //save image url into db
                $cellpics = new CellPictures();

                $cellpics->img_path = 'img/product/' . $uploader->getUploadName();
                $cellpics->item_id = $itemID;
                $cellpics->save();
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

        $email = $request->input('input-email');

        $this->validate($request,[
            'input-first' => 'required|max:20',
            'input-last' => 'required|max:30',
            'input-email' => 'email|required|max:60', //unique:users
            'select-location' => 'required',
            'select-division' => 'required',
            'input-password' => 'required|min:8'
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

         return redirect('api/register')->with('status','Please check '.$email.' for activation link.');
    }

    public function postLogin(Request $request){

        $this->validate($request,[
            'input-email' => 'email|required|max:60',
            'input-password' => 'required|min:8',
        ]);

        $email = $request->input('input-email');
        $password = $request->input('input-password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])){
            $id = Auth::id();
            session(['uid' => $id]);

            $user = Auth::user();
            Auth::login($user);
            return redirect()->to('api/myaccount/');
        }
        else{
            return redirect()->back()->with('status', 'Please, check your credentials again. 
                                                       Have you activated your account?');
        }
    }

    public function getLogout(){
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
