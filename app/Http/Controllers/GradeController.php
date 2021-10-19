<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = Grade::all();

        return view('indexGrade', compact('grades'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createGrade');
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
            'libelleGrade' => 'required|max:255'
            
        ]);
        $grade = Grade::create($validatedData);
   
        return redirect('/grades')->with('success', 'Grade bien enregistre');
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
        $grade = Grade::findOrFail($id);

        return view('editGrade', compact('grade'));
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
            'libelleGrade' => 'required|max:255'
        ]);
        grade::whereId($id)->update($validatedData);

        return redirect('/grades')->with('success', 'Grade bien change');
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
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return redirect('/grades')->with('success', 'Grade bien supprime');
    }
}
