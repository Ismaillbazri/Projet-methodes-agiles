<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ticket extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $r1 = $request->validationCustom01;
        $r2 = $request->validationCustom02;
        $r3 = $request->validationCustom03;
        $r4 = $request->validationCustom04;
        $r5 = $request->validationCustom05;
        $r6 = $request->validationCustom06;
        $r7 = $request->validationCustom07;
        $prixUnit = 300;
        $prix = $r6 * $prixUnit + $r7;
        

        return view("ticket",compact('r1','r2','r3','r4','r5','r6','r7','prix'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
