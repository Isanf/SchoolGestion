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


<ul id="menu-demo2">
	
	<li><a href="disciplines.html">CHOISIR</a>
		<ul>
      @foreach($cours as $cour)

		  <li><a href="{{ route( 'cours.show', $cour->mat)}}">{{ $cour->mat }}</a></li>
      @endforeach

		</ul>
	</li>
	
</ul>
  
<!--form method="GET" action="{{ route( 'cours.show', $cour->mat)}}">

CLIQUER ICI POUR CHOISIR 
<div class="form-group">
<label for="mat">F:</label>
<select name="mat" id="mat" class="form-control">
  <option value="">CLIQUER ICI POUR CHOISIR </option>
  @foreach($cours as $cour)
      <option value="{{ $cour->mat }}">   {{ $cour->mat }}</option>
  @endforeach
</select>
</div>

<button type="submit" class="btn btn-primary">Ajouter </button>

</form-->

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Heure Debut</td>
          <td>Heure Fin</td>
          <td>Mois ESTA</td>
          <td>Semestre</td>
          <td>Matiere</td>
          <td>Classe</td>
          <td>Duree</td>
          <td>Enseignant</td>
          <td>Tronc C.</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cours as $cour)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @foreach($cours2 as $cour2)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        @foreach($cours3 as $cour3)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        @foreach($cours4 as $cour4)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        @foreach($cours5 as $cour5)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        @foreach($cours6 as $cour6)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        @foreach($cours7 as $cour7)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


        @foreach($cours8 as $cour8)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


        @foreach($cours9 as $cour9)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


        @foreach($cours10 as $cour10)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


        @foreach($cours11 as $cour11)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


        @foreach($cours12 as $cour12)
        <tr>
              <td>{{$cour->hd}}</td>
              <td>{{$cour->hf}}</td>
              <td>{{$cour->mois}}</td>
              <td>{{$cour->libelleSemestre}}</td>
              <td>{{$cour->libelleMatiere}}</td>
              <td>{{$cour->libelleClasse}}</td>
              <td>{{$cour->dur}}</td>
              <td>{{$cour->mat}}</td>
              <td>{{$cour->tronc}}</td>

            
            <td><a href="{{ route('cours.edit',$cour->id)}}" class="btn btn-primary">Editer</a></td>
            <td>
                <form action="{{ route('cours.destroy', $cour->id)}}" method="post">
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