<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catenseignant;

class CatenseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $catenseignants = Catenseignant::all();

        return view('indexCatenseignant', compact('catenseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createCatenseignant');
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
            'libelleCatEns' => 'required|max:255'
            
        ]);
        $catenseignant = Catenseignant::create($validatedData);
   
        return redirect('/catenseignants')->with('success', 'Categorie Enseignant bien enregistree');
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
        $catenseignant = Catenseignant::findOrFail($id);

        return view('editCatenseignant', compact('catenseignant'));
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
            'libelleCatEns' => 'required|max:255'
        ]);
        catenseignant::whereId($id)->update($validatedData);

        return redirect('/catenseignants')->with('success', 'Categorie Enseignant bien changee');
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
        $catenseignant = Catenseignant::findOrFail($id);
        $catenseignant->delete();

        return redirect('/catenseignants')->with('success', 'Categorie Enseignant bien supprimee');
    }
}
