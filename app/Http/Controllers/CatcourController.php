<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catcour;

class CatcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $catcours = Catcour::all();

        return view('indexCatcour', compact('catcours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createCatcour');
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
            'libelleCatcour' => 'required|max:255'
            
        ]);
        $catcour = Catcour::create($validatedData);
   
        return redirect('/catcours')->with('success', 'Categorie cour bien enregistree');
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
        $catcour = Catcour::findOrFail($id);

        return view('editCatcour', compact('catcour'));
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
            'libelleCatcour' => 'required|max:255'
        ]);
        catcour::whereId($id)->update($validatedData);

        return redirect('/catcours')->with('success', 'Categorie cour bien changee');
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
        $catcour = Catcour::findOrFail($id);
        $catcour->delete();

        return redirect('/catcours')->with('success', 'Categorie Cour bien supprimee');
    }
}
