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
          <td>ID</td>
          <td>Libelle </td>
          <td>Mail </td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ents as $ent)
        <tr>
            <td>{{$ent->id}}</td>
            <td>{{$ent->libelleEnt}}</td>
            <td>{{$ent->mailEnt}}</td>
            
            <td><a href="{{ route('ents.edit',$ent->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('ents.destroy', $ent->id)}}" method="post">
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