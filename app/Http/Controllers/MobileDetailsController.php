<?php

namespace App\Http\Controllers;

use App\CellPictures;
use App\MobileDetails;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class MobileDetailsController extends Controller
{

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function CellPictures(){
       return $this->hasMany('App\CellPictures');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'title' => 'required|max:100',
           'description' => 'required|max:250',
           'spec' => 'required',
           'manufacture' => 'required',
           'model'  => 'required',
           'contact' => 'required|min:10',
           'price' => 'required'
       ]);

       $post = new MobileDetails([
           'title' => $request->input('title'),
           'description' => $request->input('description'),
           'specifications' => $request->input('spec'),
           'manufacturer' => $request->input('manufacture'),
           'model' => $request->input('model'),
           'contact' => $request->input('contact'),
           'price' => $request->input('price'),
           'user_id' => Auth::id()
       ]);

       $pics = new CellPictures([
           'img_path' => "",
           'mobile_details_id' => ''
       ]);

       $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileDetails  $mobileDetails
     * @return \Illuminate\Http\Response
     */
    public function show(MobileDetails $mobileDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileDetails  $mobileDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileDetails $mobileDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileDetails  $mobileDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileDetails $mobileDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileDetails  $mobileDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileDetails $mobileDetails)
    {
        //
    }
}
