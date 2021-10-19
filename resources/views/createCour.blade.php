<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
<a href="http://127.0.0.1:8000" position=right>ACCUEIL</a><BR/>
<a href="http://127.0.0.1:8000/admins" position=right>TABLEAU DE BORD</a>
  <div class="card-header">
    Ajout Cour
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cours.store') }}">
          <div class="form-group">
              @csrf
              <label for="hd">Heure Debut:</label>
              <input type="text" placeholder="H:Min-JJ/MM/AAAA"  class="form-control" name="hd"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="hf">Heure Fin:</label>
              <input type="text" placeholder="H:Min-JJ/MM/AAAA" class="form-control" name="hf"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="hf">Mois ESTA:</label>

              <select name="mois" id="mois" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                <option value="25 Janvier-26 Fevrier">25 Janvier-26 Fevrier  </option>
                <option value="25 Fevrier-26 Mars">25 Fevrier-26 Mars </option>
                <option value="25 Mars-26 Avril">25 Mars-26 Avril </option>
                <option value="25 Avril-26 Mai">25 Avril-26 Mai  </option>
                <option value="25 Mai-26 Juin">25 Mai-26 Juin  </option>
                <option value="25 Juin-26 Juillet">25 Juin-26 Juillet </option>
                <option value="25 Juillet-26 Aout">25 Juillet-26 Aout</option>
                <option value="25 Aout-26 Septembre">25 Aout-26 Septembre  </option>
                <option value="25 Septembre-26 Octobre">25 Septembre-26 Octobre </option>
                <option value="25 Octobre-26 Novembre">25 Octobre-26 Novembre  </option>
                <option value="25 Novembre-26 Decembre">25 Novembre-26 Decembre </option>
                <option value="25 Decembre-26 Janvier">25 Decembre-26 Javier </option>
                


              </select>
          </div>
          <div class="form-group">
            <label for="libelleSemestre">Semestre:</label>
            <select name="libelleSemestre" id="libelleSemestre" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($semestres as $semestre)
                    <option value="{{ $semestre->libelleSemestre }}">   {{ $semestre->libelleSemestre }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="libelleMatiere">Matiere:</label>
            <select name="libelleMatiere" id="libelleMatiere" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($matieres as $matiere)
                    <option value="{{ $matiere->libelleMatiere }}">   {{ $matiere->libelleMatiere }}</option>
                @endforeach
            </select>
          </div>
         
          <div class="form-group">
              @csrf
              <label for="libelleMatiere">Classe:</label>
            <select name="libelleClasse" id="libelleClasse" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR</option>
                @foreach($filieres as $filiere)
                  @foreach($niveaux as $niveau)
                      <option value="{{ $filiere->libelleFiliere }} {{ $niveau->libelleNiveau }}">   {{ $filiere->libelleFiliere }} {{ $niveau->libelleNiveau }}</option>
                  @endforeach                    
                @endforeach
                <!--option value="SIR1"> SIR1 </option>
                <option value="SIR2"> SIR2 </option>
                <option value="SIR3"> SIR3 </option>
                <option value="SIRM1">SIRM1  </option>
                <option value="SIRM2"> SIRM2 </option>
                <option value="GBM1"> GBM1 </option>
                <option value="GBM2">  </option>
                <option value="GBM3">  </option>
                <option value="GBMM1">  </option>
                <option value="GBMM2">  </option>
                <option value="RIT1">  </option>
                <option value="RIT2">  </option>
                <option value="RIT3">  </option>
                <option value="RITM1">  </option>
                <option value="RITM2">  </option>
                <option value="GEII1">  </option>
                <option value="GEII2">  </option>
                <option value="GEII3">  </option>
                <option value="GEIIM1">  </option>
                <option value="GEIIM2">  </option-->

            </select>
          </div>
          <div class="form-group">
              @csrf
              <label for="dur">Duree:</label>
              <input type="text" class="form-control" name="dur"/>
          </div>
          <div class="form-group">
            <label for="mat">Enseignant:</label>
            <select name="mat" id="mat" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($enses as $ense)
                    <option value="{{ $ense->mat }} {{ $ense->nom }} {{ $ense->pre }}"> Matricule:{{ $ense->mat }} {{ $ense->nom }} {{ $ense->pre }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="tronc">Tronc commun:</label>
            <select name="tronc" id="tronc" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                <option value="oui"> OUI </option>
                <option value="non"> NON </option>

            </select>
          </div>
         
         
          
          <button type="submit" class="btn btn-primary">Ajouter </button>
      </form>
  </div>
</div>
@endsection