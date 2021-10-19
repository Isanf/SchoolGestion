<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>


<div class="card uper">
<div class="card-header">
  VERIFIER L' ENTREPRISE DE L'ENSEIGNANT
</div>
      <div class="form-group">
           
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
    <form method="post" action="{{ route('foncs.show', 'll') }}">

<label for="mai">Mail Entreprise:</label>
<input type="text" name="mailEnt">
          <select name="mailEnt1" id="mai" class="form-control">
              <option value="">CLIQUER ICI POUR CHOISIR L'ENTREPRISE</option>
              @foreach($foncs as $fonc)
                  <!--option value="{{ $fonc->mailEnt }}">  Mail: {{ $fonc->mailEnt }}</option-->
                  <a href="{{ route( 'foncs.show', $fonc)}}">{{ $fonc->mailEnt }}</a><br/>
              @endforeach
          </select>
          
          <button type="submit" class="btn btn-primary">Ajouter </button>

</form>
  </div>
</div>
@endsection