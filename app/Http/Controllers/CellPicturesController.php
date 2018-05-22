<?php

namespace App\Http\Controllers;

use App\CellPictures;
use Illuminate\Http\Request;

class CellPicturesController extends Controller
{

    public function MobileDetails(){
        return $this->belongsTo('App\MobileDetails');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CellPictures  $cellPictures
     * @return \Illuminate\Http\Response
     */
    public function show(CellPictures $cellPictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CellPictures  $cellPictures
     * @return \Illuminate\Http\Response
     */
    public function edit(CellPictures $cellPictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CellPictures  $cellPictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CellPictures $cellPictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CellPictures  $cellPictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(CellPictures $cellPictures)
    {
        //
    }
}
