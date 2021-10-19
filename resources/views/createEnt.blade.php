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
  VERIFIER L' ENTREPRISE DE L'ENSEIGNANT
</div>
      <div class="form-group">
            <select name="cc" id="" class="form-control">
                <option value="">CLIQUER ICI POUR VERIFIER </option>
                @foreach($ents as $ent)
                    <option value="{{ $ent->libelleEnt }}">Nom:{{ $ent->libelleEnt }}   Mail: {{ $ent->mailEnt }}</option>
                @endforeach
            </select>
      </div>
  <div class="card-header">
  SINON AJOUTER SON ENTREPRISE
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
      
      <form method="post" action="{{ route('ents.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Libelle :</label>
              <input type="text" class="form-control" name="libelleEnt"/>
              
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Mail :</label>
              <input type="text" class="form-control" name="mailEnt"/>
              
          </div>
          
          
          <button type="submit" class="btn btn-primary">Ajouter </button>
      </form>
  </div>
</div>
@endsection