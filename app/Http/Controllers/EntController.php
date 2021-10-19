<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ent;

class EntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ents = Ent::all();

        return view('indexEnt', compact('ents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ents = Ent::all();
        return view('createEnt', compact('ents'));
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
            'libelleEnt' => 'required|max:255',
            'mailEnt' => 'required|max:255'
            
        ]);
        $ent = Ent::create($validatedData);
   
        return redirect('/ents/create')->with('success', ' bien enregistree');
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
        $ent = Ent::findOrFail($id);

        return view('editEnt', compact('ent'));
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
            'libelleEnt' => 'required|max:255',
            'mailEnt' => 'required|max:255'
        ]);
        ent::whereId($id)->update($validatedData);

        return redirect('/ents')->with('success', 'bien changee');
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
        $ent = Ent::findOrFail($id);
        $ent->delete();

        return redirect('/ents')->with('success', ' bien supprimee');
    }
}
