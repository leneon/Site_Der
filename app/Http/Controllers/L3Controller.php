<?php

namespace App\Http\Controllers;

use App\Models\L3;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class L3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $l3s = L3::get();
        return view('niveaux.L3',compact('l3s'));
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
     * @param  \App\Models\l3  $l3
     * @return \Illuminate\Http\Response
     */
    public function show(l3 $l3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\l3  $l3
     * @return \Illuminate\Http\Response
     */
    public function edit(l3 $l3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\l3  $l3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, l3 $l3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\l3  $l3
     * @return \Illuminate\Http\Response
     */
    public function destroy(l3 $l3)
    {
        //
    }
}
