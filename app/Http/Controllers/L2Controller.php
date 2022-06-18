<?php

namespace App\Http\Controllers;

use App\Models\L2;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class L2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l2s = L2::get();
        return view('niveaux.L2',compact(('l2s')));
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
     * @param  \App\Models\l2  $l2
     * @return \Illuminate\Http\Response
     */
    public function show(l2 $l2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\l2  $l2
     * @return \Illuminate\Http\Response
     */
    public function edit(l2 $l2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\l2  $l2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, l2 $l2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\l2  $l2
     * @return \Illuminate\Http\Response
     */
    public function destroy(l2 $l2)
    {
        //
    }
}
