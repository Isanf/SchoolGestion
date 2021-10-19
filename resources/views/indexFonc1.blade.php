<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
<a href="http://127.0.0.1:8000" position=right>ACCUEIL</a><BR/>
<a href="http://127.0.0.1:8000/admins" position=right>TABLEAU DE BORD</a>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif


             
<!--form method="PUT" action="{{ route( 'foncs.show', $fonc->mailEnt)}}">

              CLIQUER ICI POUR CHOISIR L'ENTREPRISE
          <div class="form-group">
            <label for="mailEnt">F:</label>
            <select name="mailEnt" id="mailEnt" class="form-control">
                <option value="">CLIQUER ICI POUR CHOISIR </option>
                @foreach($foncs as $fonc)
                    <option value="{{ $fonc->mailEnt }}">   {{ $fonc->mailEnt }}</option>
                @endforeach
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Ajouter </button>

</form-->


  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Libelle Fonction</td>
          <td>Libelle Direction</td>
          <td>Mail Entreprise</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($foncs as $fonc)
        <tr>
            <td>{{$fonc->id}}</td>
            <td>{{$fonc->libelleFonc}}</td>
            <td>{{$fonc->libelleDir}}</td>
            <td>{{$fonc->mailEnt}}</td>
            
            <td><a href="{{ route('foncs.edit',$fonc->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('foncs.destroy', $fonc->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection