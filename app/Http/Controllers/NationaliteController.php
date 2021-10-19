<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nationalite;

class NationaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nationalites = Nationalite::all();

        return view('indexNationalite', compact('nationalites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createNationalite');
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
            'libelleNationalite' => 'required|max:255'
            
        ]);
        $nationalite = Nationalite::create($validatedData);
   
        return redirect('/nationalites')->with('success', 'Nationalite bien enregistree');
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

        return view('editNationalite', compact('nationalite'));
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
            'libelleNationalite' => 'required|max:255'
        ]);
        nationalite::whereId($id)->update($validatedData);

        return redirect('/nationalites')->with('success', 'Nationalite bien changee');
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
        $nationalite = Nationalite::findOrFail($id);
        $nationalite->delete();

        return redirect('/nationalites')->with('success', 'Nationalite bien supprimee');
    }
}
