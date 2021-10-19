<!-- edit.blade.php -->

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
    Editer Enseignant
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
      <form method="post" action="{{ route('enses.update', $ense->id) }}">
      <div class="form-group">
      @csrf
              @method('PATCH')
              <label for="mat">Matricule:</label>
              <input type="text"  class="form-control" name="mat" value="{{$ense->mat}}"/>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="nom" value="{{$ense->nom}} "/>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="pre">Prenom:</label>
              <input type="text" class="form-control" name="pre" value="{{$ense->pre}}"/>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
            <label for="libelleNationalite">Nationalite:</label>
            <select name="libelleNationalite" id="libelleNationalite" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR LA NATIONALITE</option>
                @foreach($nationalites as $nationalite)
                    <option value="{{ $nationalite->libelleNationalite }}">   {{ $nationalite->libelleNationalite }}</option>
                @endforeach
            </select>
          </div>
         
          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="apost">Adresse Postale:</label>
              <input type="text" class="form-control" name="apost" value="{{$ense->apost}}"/>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="tel">Telephone:</label>
              <input type="mail" class="form-control" name="tel" value="{{$ense->tel}}" />
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
            <label for="mailEnt">Mail de son entreprise:</label>
            <select name="mailEnt" id="mailEnt" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($ents as $ent)
                    <option value="{{ $ent->mailEnt }}">   {{ $ent->mailEnt }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
            <label for="libelleFonc">Fonction:</label>
            <select name="libelleFonc" id="libelleFonc" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR LA NATIONALITE</option>
                @foreach($foncs as $fonc)
                    <option value="{{ $fonc->libelleFonc }}">   {{ $fonc->libelleFonc }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
            <label for="libelleGrade">Grade:</label>
            <select name="libelleGrade" id="libelleGrade" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR</option>
                @foreach($grades as $grade)
                    <option value="{{ $grade->libelleGrade }}">   {{ $grade->libelleGrade }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
          @csrf
              @method('PATCH')
            <label for="libelleCatenseignant">Categorie:</label>
            <select name="libelleCatenseignant" id="libelleCatenseignant" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($catenseignants as $catenseignant)
                    <option value="{{ $catenseignant->libelleCatEns}}">   {{ $catenseignant->libelleCatEns }}</option>
                @endforeach
            </select>
          </div>
         
          
          <button type="submit" class="btn btn-primary">Changer </button>
      </form>
  </div>
</div>
@endsection