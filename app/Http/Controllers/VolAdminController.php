<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;

class VolAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        return view('Admin');
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
        $vol=new Vol();

        /*$r1 = $request->validationCustom01;
        $r2 = $request->validationCustom02;
        $r3 = $request->validationCustom03;
        $r4 = $request->validationCustom04;
        $r5 = $request->validationCustom05;
        $r6 = $request->validationCustom06;
        $r7 = $request->validationCustom07;
        $r8 = $request->validationCustom08;
        $r9 = $request->validationCustom09;*/

        $vol->NumVol=$request->validationCustom01;
        $vol->Depart=$request->validationCustom02;
        $vol->Arrivee=$request->validationCustom03;
        $vol->Compagnie=$request->validationCustom04;
        $vol->Date=$request->validationCustom05;
        $vol->HeureDepart=$request->validationCustom06;
        $vol->HeureArrivee=$request->validationCustom07;
        $vol->Prix=$request->validationCustom08;
        $vol->Duree=$request->validationCustom09;

        $vol->save();

        return back()->with('status','Annonce bien ajoutée');;


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
