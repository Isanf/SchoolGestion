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
    Ajout Annee
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
      <form method="post" action="{{ route('annees.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Annee:</label>
              <input type="text" class="form-control" name="libelleAnnee"/>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Ajouter Annee</button>
      </form>
  </div>
</div>
@endsection