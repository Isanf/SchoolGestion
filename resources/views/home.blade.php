@extends('layouts.app')

@section('content')
<div class="container">
<a href="http://127.0.0.1:8000" position=right>ACCUEIL</a><BR/>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord (Dashboard)</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous etes connecte(e)!

                    <a class="btn btn-primary active btn-block show" role="button" href="cours/create">
				-----<<<<<<<<<<<<(((((    AJOUTER UN COUR    )))))>>>>>>>>>>>-----
			</a><br/>
                    <a class="btn btn-success active btn-block show" role="button" href="cours">
				ETATS MENSUELS DES HEURES DE VACATION PAR ENSEIGNANT
			</a><br/>
			<!--a class="btn btn-success active btn-block show" role="button" href="#">
				FICHES D&#39;HONORAIRES DE VACATION PAR ENSEIGNANT
			</a><br/>
     
			<a class="btn btn-success active btn-block show" role="button" href="#">
				TABLEAU DE BORD DES VOLUMES HORAIRES DE COURS EFFECTUER ET RESTANTS PAR SEMESTRE
			</a><br/>
            
			<a class="btn btn-success active btn-block show" role="button" href="#">
				TABLEAU DE BORD DES DEVOIRS ET REMISES DE NOTES PAR SEMESTRE
			</a><br/-->
            <a class="btn btn-success active btn-block show" role="button" href="admins">
				TABLEAU DE BORD DES EDITIONS
			</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
