<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Ense;
use App\Ent;
use App\Fonc;
use App\Grade;
use App\Catenseignant;
use App\Nationalite;


class EnseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       $enses = Ense::all();
       
       // if( $request->mailEnt!=null){
        //$foncs = Fonc::all()->where('mailEnt', $request->mailEnt);
    //}
        return view('indexEnse', compact('enses'));
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
       $foncs = Fonc::all();
       $ents = Ent::all();
       $catenseignants = Catenseignant::all();
       $grades = Grade::all();
       $nationalites = Nationalite::all();

       return view('createEnse', compact('foncs','ents','catenseignants','grades','nationalites'));
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
        $catenseignants = Catenseignant::all();
        $grades = Grade::all();
        $nationalites = Nationalite::all();
 
        return view('createEnse', compact('foncs','ents','catenseignants','grades','nationalites'));
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
            'mat' => 'required|max:255',
            'nom' => 'required|max:255',
            'pre' => 'required|max:255',
            'libelleNationalite' => 'required|max:255',
            'apost' => 'required|max:255',
            'tel' => 'required|max:255',
            'mailEnt' => 'required|max:255',
            'libelleFonc' => 'required|max:255',
            'libelleGrade' => 'required|max:255',
            'libelleCatenseignant' => 'required|max:255'
            
        ]);
        $ense = Ense::create($validatedData);
   
        return redirect('/enses')->with('success', ' bien enregistree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
       
       
        return 'toto'. $id ;
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
        $ense = Ense::findOrFail($id);
        $foncs = Fonc::all();
        $ents = Ent::all();
        $catenseignants = Catenseignant::all();
        $grades = Grade::all();
        $nationalites = Nationalite::all();
 
        return view('editEnse', compact('ense','foncs','ents','catenseignants','grades','nationalites'));
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
            'mat' => 'required|max:255',
            'nom' => 'required|max:255',
            'pre' => 'required|max:255',
            'libelleNationalite' => 'required|max:255',
            'apost' => 'required|max:255',
            'tel' => 'required|max:255',
            'mailEnt' => 'required|max:255',
            'libelleFonc' => 'required|max:255',
            'libelleGrade' => 'required|max:255',
            'libelleCatenseignant' => 'required|max:255'
        ]);
        ense::whereId($id)->update($validatedData);

        return redirect('/enses')->with('success', 'bien changee');
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
        $ense = Ense::findOrFail($id);
        $ense->delete();

        return redirect('/enses')->with('success', 'bien supprimee');
    }
}
