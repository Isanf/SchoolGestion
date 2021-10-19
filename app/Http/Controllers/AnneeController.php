<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Annee;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $annees = Annee::all();

        return view('indexAnnee', compact('annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createAnnee');
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
            'libelleAnnee' => 'required|max:255'
            
        ]);
        $annee = Annee::create($validatedData);
   
        return redirect('/annees')->with('success', 'Annee bien enregistree');
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
        $annee = Annee::findOrFail($id);

        return view('editAnnee', compact('annee'));
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
            'libelleAnnee' => 'required|max:255'
        ]);
        annee::whereId($id)->update($validatedData);

        return redirect('/annees')->with('success', 'Annee bien changee');
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
        $annee = Annee::findOrFail($id);
        $annee->delete();

        return redirect('/annees')->with('success', 'Annee bien supprimee');
    }
}
