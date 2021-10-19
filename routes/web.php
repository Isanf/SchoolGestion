<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('nationalites', 'NationaliteController');
Route::resource('annees', 'AnneeController');
Route::resource('catcours', 'CatcourController');
Route::resource('catenseignants', 'CatenseignantController');
Route::resource('ents', 'EntController');
Route::resource('filieres', 'FiliereController');
Route::resource('grades', 'GradeController');
Route::resource('matieres', 'MatiereController');
Route::resource('nationalites', 'NationaliteController');
Route::resource('niveaux', 'NiveauController');
Route::resource('semestres', 'SemestreController');
Route::resource('foncs', 'FoncController');
Route::get('foncs2/{mailEnt}', 'FoncController@index2')->name('foncs2');
Route::resource('admins', 'AdminController');
Route::resource('enses', 'EnseController');
Route::resource('cours', 'CourController');



