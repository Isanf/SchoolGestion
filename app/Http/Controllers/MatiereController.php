<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Matiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $matieres = Matiere::all();

        return view('indexMatiere', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createMatiere');
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
            'libelleMatiere' => 'required|max:255'
            
        ]);
        $matiere = Matiere::create($validatedData);
   
        return redirect('/matieres')->with('success', 'Matiere bien enregistree');
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
        $nationalite = Nationalite::findOrFail($id);

        return view('editMatiere', compact('matiere'));
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
            'libelleMatiere' => 'required|max:255'
        ]);
        matiere::whereId($id)->update($validatedData);

        return redirect('/matieres')->with('success', 'Matiere bien changee');
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
        $matiere = Matiere::findOrFail($id);
        $matiere->delete();

        return redirect('/matieres')->with('success', 'Matiere bien supprimee');
    }
}
