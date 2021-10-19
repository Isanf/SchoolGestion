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
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Matricule</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Tel.</td>
          <td>Nationalite</td>
          <td>B.Post.</td>
          <td>M.Entrprise</td>
          <td>Grade</td>
          <td>Categorie</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($enses as $ense)
        <tr>
              <td>{{$ense->mat}}</td>
              <td>{{$ense->nom}}</td>
              <td>{{$ense->pre}}</td>
              <td>{{$ense->tel}}</td>
              <td>{{$ense->libelleNationalite}}</td>
              <td>{{$ense->apost}}</td>
              <td>{{$ense->mailEnt}}</td>
              <td>{{$ense->libelleGrade}}</td>
              <td>{{$ense->libelleCatenseignant}}</td>

            
            <td><a href="{{ route('enses.edit',$ense->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('enses.destroy', $ense->id)}}" method="post">
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