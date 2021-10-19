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
    Editer 
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
      <form method="post" action="{{ route('foncs.update', $fonc->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Libelle :</label>
              <input type="text" class="form-control" name="libelleFonc" value="{{$fonc->libelleFonc}}"/>
             
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Libelle :</label>
              <input type="text" class="form-control" name="libelleDir" value="{{$fonc->libelleDir}}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Libelle nationalite:</label>
              <!--input type="text" class="form-control" name="mailEnt" value="{{$fonc->mailEnt}}"/-->
              <select name="mailEnt" id="mailEnt" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($ents as $ent)
                    <option value="{{ $ent->mailEnt }}">   {{ $ent->mailEnt }}</option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Changer </button>
      </form>
  </div>
</div>
@endsection