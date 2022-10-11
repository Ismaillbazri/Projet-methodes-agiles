<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Vol;
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
    public function store(Request $request,$id)
    {
        $vol=Vol::find($id);

        $r1 = $request->validationCustom01;
        $r2 = $request->validationCustom02;
        $r3 = $request->validationCustom03;
        $r4 = $request->validationCustom04;
        $r5 = $request->validationCustom05;
        $r6 = $request->validationCustom06;
        $r7 = $request->validationCustom07;
        //$r8 = $request->validationCustom08;
        $prixUnit = $vol->Prix;
        $prix = $r6 * $prixUnit + $r7;

        $client=new Client();
        $client->First_name=$r1;
        $client->Last_Name=$r2;
        $client->email=$r3;
        $client->Adress=$r4;
        $client->Postal_Code=$r5;
        $client->save();

        $clientid=$client->id;
        
        $clt=Client::Find($clientid);
        $clt->vols()->attach($vol->id);
        $numvol=$vol->NumVol;
        

        return view("ticket",compact('r1','r2','r3','r4','r5','r6','r7','prix','numvol'));
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
