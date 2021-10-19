<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Fonc;
use App\Ent;

class FoncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       $foncs = Fonc::all();
       $ent = Ent::all();
       $ents = Ent::all();
       $fonc = Fonc::all();        
       // if( $request->mailEnt!=null){
        //$foncs = Fonc::all()->where('mailEnt', $request->mailEnt);
    //}
        return view('indexFonc', compact('foncs','fonc','ent','ents'));
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
    {
        //
       // $foncs = Fonc::all();
       // if( $request->mailEnt!=null){
        //$foncs = Fonc::all()->where('mailEnt', $request->mailEnt);
    //}
        return $request->mailEnt;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        //$ents = Ent::all();
        $foncs = Fonc::all();
        $ents = Ent::all();

        //return view('createFonc', compact('ents'));
        return view('createFonc',compact('foncs','ents'));
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
        $validatedData = $request->validate([
            'libelleFonc' => 'required|max:255',
            'libelleDir' => 'required|max:255',
            'mailEnt' => 'required|max:255'
            
        ]);
        $fonc = Fonc::create($validatedData);
   
        return redirect('/foncs')->with('success', ' bien enregistree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $mailEnt)
    {
       
       $foncs = Fonc::all()->where('mailEnt', $mailEnt);
       $fonc = Fonc::all()->where('mailEnt', $mailEnt);

       //return 'toto : '. $mailEnt ;
        return view('indexFonc', compact('foncs','fonc'));

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
        $fonc = Fonc::findOrFail($id);
        $ents = Ent::all();


        return view('editFonc', compact('fonc','ents'));
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
        $validatedData = $request->validate([
            'libelleFonc' => 'required|max:255',
            'libelleDir' => 'required|max:255',
            'mailEnt' => 'required|max:255'
        ]);
        fonc::whereId($id)->update($validatedData);

        return redirect('/foncs')->with('success', 'bien changee');
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
        $fonc = Fonc::findOrFail($id);
        $fonc->delete();

        return redirect('/foncs')->with('success', 'bien supprimee');
    }
}
