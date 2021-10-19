<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filiere;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filieres = Filiere::all();

        return view('indexFiliere', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createFiliere');
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
            'libelleFiliere' => 'required|max:255'
            
        ]);
        $filiere = Filiere::create($validatedData);
   
        return redirect('/filieres')->with('success', 'Filiere bien enregistree');
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
        $filiere = Filiere::findOrFail($id);

        return view('editFiliere', compact('filiere'));
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
            'libelleFiliere' => 'required|max:255'
        ]);
        filiere::whereId($id)->update($validatedData);

        return redirect('/filieres')->with('success', 'Filiere bien changee');
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
        $filiere = Filiere::findOrFail($id);
        $filiere->delete();

        return redirect('/filieres')->with('success', 'Filiere bien supprimee');
    }
}
