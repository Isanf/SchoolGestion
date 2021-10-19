<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Cour;
use App\Filiere;
use App\Niveau;
use App\Ense;
use App\Ent;
use App\Semestre;
use App\Matiere;
use App\Catenseignant;




class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    /*$cours = Cour::all();
       $ense = Ense::all();
       $enses = Ense::all();

       $cour = Cour::all();


    
        return view('indexCour', compact('cour','cours','ense','enses'));
        $cours = Cour::all();
        /*->where('mois', '25 Janvier-26 Fevrier');
        $cours2 = Cour::all()
        ->where('mois', '25 Fevrier-26 Mars');
        $cours3 = Cour::all()
        ->where('mois', '25 Mars-26 Avril');
        $cours4 = Cour::all()
        ->where('mois', '25 Avril-26 Mai');
        $cours5 = Cour::all()
        ->where('mois', '25 Mai-26 Juin');
        $cours6 = Cour::all()
        ->where('mois', '25 Juin-26 Juillet');
        $cours7 = Cour::all()
        ->where('mois', '25 Juillet-26 Aout');
        $cours8 = Cour::all()
        ->where('mois', '25 Aout-26 Septembre');
        $cours9 = Cour::all()
        ->where('mois', '25 Septembre-26 Octobre');
        $cours10 = Cour::all()
        ->where('mois', '25 Octobre-26 Novembre');
        $cours11 = Cour::all()
        ->where('mois', '25 Novembre-26 Decembre');
        $cours12 = Cour::all()
        ->where('mois', '25 Decembre-26 Decembre');

        $cour = Cour::all()
        ->where('mois', '25 Janvier-26 Fevrier');
        $cour2 = Cour::all()
        ->where('mois', '25 Fevrier-26 Mars');
        $cour3 = Cour::all()
        ->where('mois', '25 Mars-26 Avril');
        $cour4 = Cour::all()
        ->where('mois', '25 Avril-26 Mai');
        $cour5 = Cour::all()
        ->where('mois', '25 Mai-26 Juin');
        $cour6 = Cour::all()
        ->where('mois', '25 Juin-26 Juillet');
        $cour7 = Cour::all()
        ->where('mois', '25 Juillet-26 Aout');
        $cour8 = Cour::all()
        ->where('mois', '25 Aout-26 Septembre');
        $cour9 = Cour::all()
        ->where('mois', '25 Septembre-26 Octobre');
        $cour10 = Cour::all()
        ->where('mois', '25 Octobre-26 Novembre');
        $cour11 = Cour::all()
        ->where('mois', '25 Novembre-26 Decembre');
        $cour12 = Cour::all()
        ->where('mois', '25 Decembre-26 Decembre');
//return 'toto : '. $mat ;
return view('indexCour',
compact('cours','cours2','cours3','cours4','cours5','cours6','cours7',
'cours8','cours9','cours10','cours11','cours12',
'cour','cour2','cour3','cour4','cour5','cour6','cour7',
    'cour8','cour9','cour10','cour11','cour12'));*/


      //
      $cours = Cour::all();
      //$ent = Ent::all();
      $enses = Ense::all();
      $cour = Cour::all();        
      // if( $request->mailEnt!=null){
       //$foncs = Fonc::all()->where('mailEnt', $request->mailEnt);
   //}
       return view('indexCour', compact('cours','cour',/*'ent',*/'enses'));

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
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        $enses = Ense::all();
        $filieres = Filiere::all();
        $niveaux = Niveau::all();


        
 
        return view('createCour', compact('matieres','semestres','enses','niveaux','filieres'));
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
            'hd' => 'required|max:255',
            'hf' => 'required|max:255',
            'mois' => 'required|max:255',
            'libelleSemestre' => 'required|max:255',
            'libelleMatiere' => 'required|max:255',
            'libelleClasse' => 'required|max:255',
            'dur' => 'required|max:255',
            'mat' => 'required|max:255',
            'tronc' => 'required|max:255',
            
        ]);
        $cour = Cour::create($validatedData);
   
        return redirect('/cours')->with('success', ' bien enregistree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $mat)
    {
       /*
                           $cours = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Janvier-26 Fevrier');
                           $cours2 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Fevrier-26 Mars');
                           $cours3 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Mars-26 Avril');
                           $cours4 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Avril-26 Mai');
                           $cours5 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Mai-26 Juin');
                           $cours6 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Juin-26 Juillet');
                           $cours7 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Juillet-26 Aout');
                           $cours8 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Aout-26 Septembre');
                           $cours9 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Septembre-26 Octobre');
                           $cours10 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Octobre-26 Novembre');
                           $cours11 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Novembre-26 Decembre');
                           $cours12 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Decembre-26 Decembre');

                           $cour = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Janvier-26 Fevrier');
                           $cour2 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Fevrier-26 Mars');
                           $cour3 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Mars-26 Avril');
                           $cour4 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Avril-26 Mai');
                           $cour5 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Mai-26 Juin');
                           $cour6 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Juin-26 Juillet');
                           $cour7 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Juillet-26 Aout');
                           $cour8 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Aout-26 Septembre');
                           $cour9 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Septembre-26 Octobre');
                           $cour10 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Octobre-26 Novembre');
                           $cour11 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Novembre-26 Decembre');
                           $cour12 = Cour::all()->where('mat', $mat)
                           ->where('mois', '25 Decembre-26 Decembre');
       //return 'toto : '. $mat ;
        return view('indexCour',
         compact('cours','cours2','cours3','cours4','cours5','cours6','cours7',
         'cours8','cours9','cours10','cours11','cours12',
         'cour','cour2','cour3','cour4','cour5','cour6','cour7',
         'cour8','cour9','cour10','cour11','cour12'));
*/

$cours = Cour::all()->where('mat', $mat);

//return 'toto : '. $mailEnt ;
return view('indexCour', compact('cours'));
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
        $cour = Cour::findOrFail($id);
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        $enses = Ense::all();
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
    
 
        return view('editCour', compact('cour','matieres','semestres','enses','niveaux','filieres'));
        
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
            'hd' => 'required|max:255',
            'hf' => 'required|max:255',
            'mois' => 'required|max:255',
            'libelleSemestre' => 'required|max:255',
            'libelleMatiere' => 'required|max:255',
            'libelleClasse' => 'required|max:255',
            'dur' => 'required|max:255',
            'mat' => 'required|max:255',
            'tronc' => 'required|max:255'
        ]);
        cour::whereId($id)->update($validatedData);

        return redirect('/cours')->with('success', 'bien changee');
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
        $cour = Cour::findOrFail($id);
        $cour->delete();

        return redirect('/cours')->with('success', 'bien supprimee');
    }
}
