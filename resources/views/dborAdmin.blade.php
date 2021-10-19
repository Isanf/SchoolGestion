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
  <caption><center><H1>TABLEAU DE BORD DES EDITIONS</H1></center></caption>
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
    <table class="table-bordered" align="center">
        <thead bgcolor='#0000FF'>
            <tr>
                <th>SECTION</th>
                <th>AJOUTER </th>
				 <th>LISTE</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>ENSEIGNANT </td>
                <td><a class="btn btn-success active btn-block" role="button" href="enses/create">AJOUTER  ENSEIGNANT</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="enses">LISTER ENSEIGNANT</a></td>
            </tr>
			<tr>
                <td>NATIONNALITE </td>
                <td><a class="btn btn-primary active btn-block" role="button" href="nationalites/create">AJOUTER  NATIONNALITE</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="nationalites">LISTER NATIONNALITE</a></td>
            </tr>
            <tr>
                <td>SEMESTRE </td>
                <td><a class="btn btn-success active btn-block" role="button" href="semestres/create">AJOUTER  SEMESTRE</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="semestres">LISTER SEMESTRE</a></td>
            </tr>
			<tr>
                <td>ENTREPRISE </td>
                <td><a class="btn btn-primary active btn-block" role="button" href="ents/create">AJOUTER  ENTREPRISE</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="ents">LISTER ENTREPRISE</a></td>
            </tr>
            <tr>
                <td>CATEGORIE ENSEIGNANT  </td>
                <td><a class="btn btn-success active btn-block" role="button" href="catenseignants/create">AJOUTER  CATEGORIE ENSEIGNANT  </a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="catenseignants">LISTER CATEGORIE ENSEIGNANT  </a></td>
            </tr>
			<tr>
                <td>GRADES </td>
				<td><a class="btn btn-primary active btn-block" role="button" href="grades/create">AJOUTER  GRADES</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="grades">LISTER GRADES</a></td>

            </tr>
            <!--tr>
                <td>TAUX DE VACCATION </td>
                <td><a class="btn btn-success active btn-block" role="button" href="tvs/create">AJOUTER  TAUX DE VACCATION</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="tvs">LISTER TAUX DE VACCATION</a></td>
            </tr-->
			<tr>
                <td>MATIERES </td>
                <td><a class="btn btn-success active btn-block" role="button" href="matieres/create">AJOUTER  MATIERES</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="matieres">LISTER MATIERES</a></td>
            </tr>
            <!--tr>
                <td>NOTES </td>
                <td><a class="btn btn-success active btn-block" role="button" href="notes/create">AJOUTER  NOTES</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="notes">LISTER NOTES</a></td>
            </tr>
			<tr>
                <td>RELANCE </td>
                <td><a class="btn btn-primary active btn-block" role="button" href="relances/create">AJOUTER  RELANCE</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="relances">LISTER RELANCE</a></td>
            </tr-->
            <tr>
                <!--td>REMISE NOTE </td>
                <td><a class="btn btn-success active btn-block" role="button" href="rns/create">AJOUTER REMISE NOTE</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="rns">LISTER REMISE NOTE</a></td>
            </tr-->
			<tr>
                <td>FONCTIONS </td>
                <td><a class="btn btn-primary active btn-block" role="button" href="foncs/create">AJOUTER FONCTIONS</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="foncs">LISTER FONCTIONS</a></td>
            </tr>
            <tr>
                <td>CATEGORIE COURS</td>
                <td><a class="btn btn-success active btn-block" role="button" href="catcours/create">AJOUTER CATEGORIE COURS</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="catcours">LISTER CATEGORIE COURS</a></td>
            </tr>
			<tr>
                <!--td>DEVOIRS</td>
                <td><a class="btn btn-primary active btn-block" role="button" href="devoirs/create">AJOUTER DEVOIRS</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="devoirs">LISTER DEVOIRS</a></td>
            </tr>
            <tr>
                <td>CLASSE</td>
                <td><a class="btn btn-success active btn-block" role="button" href="classe/create">AJOUTER CLASSE</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="classe">LISTER CLASSE</a></td>
            </tr-->
			<tr>
                <td>ANNEES ACADEMIQUES </td>
                <td><a class="btn btn-primary active btn-block" role="button" href="annees/create">AJOUTER ANNEES ACADEMIQUES </a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="annees">LISTER ANNEES ACADEMIQUES </a></td>
            </tr>
            <tr>
                <!--td>SURVEILLANTS </td>
                <td><a class="btn btn-success active btn-block" role="button" href="surveillants/create">AJOUTER SURVEILLANTS</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="surveillants">LISTER SURVEILLANTS</a></td>
            </tr>
			<tr>
                <td>TRONC COMMUN TP</td>
                <td><a class="btn btn-primary active btn-block" role="button" href="tcs/create">AJOUTER TRONC COMMUN TP</a></td>
				<td><a class="btn btn-success active btn-block" role="button" href="tcs">LISTER TRONC COMMUN TP</a></td>
            </tr-->
            <tr>
                <td>NIVEAU </td>
                <td><a class="btn btn-success active btn-block" role="button" href="niveaux/create">AJOUTER NIVEAU</a></td>
				<td><a class="btn btn-primary active btn-block" role="button" href="niveaux">LISTER NIVEAU</a></td>
            </tr>
			
        </tbody>
    </table>
  </div>
</div>
@endsection