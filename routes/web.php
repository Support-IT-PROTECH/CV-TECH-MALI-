<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job-infos', [App\Http\Controllers\HomeController::class, 'job_infos'])->name('job-infos');
Route::get('/company-infos', [App\Http\Controllers\HomeController::class, 'company_infos'])->name('company-infos');
Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobs_list'])->name('jobs-list');
Route::get('/top-profile', [App\Http\Controllers\HomeController::class, 'top_profile'])->name('top-profile');
//la route pour afficher le formulaire de l'entreprise
Route::get('/entreprise-create', [EntrepriseController::class, 'entreprise_infos'])->name('entreprise-create');
//la route pour afficher le formulaire de la valeur de l'entreprise 
Route::get('/entreprise-valeur', [EntrepriseController::class, 'entreprise_valeur'])->name('entreprise_valeur');
// la route pour stocker les informations de l'entreprise
Route::post('/store_entreprise', [EntrepriseController::class, 'store_entreprise'])->name('store_entreprise');
// la route pour stocker les informations de la valeur de l'entreprise
Route::post('/store_valeur_entreprise/', [EntrepriseController::class, 'store_valeur_entreprise'])->name('store_valeur_entreprise');
//la route pour afficher le formulaire des secteurs d'activite 
Route::get('/entreprise_secteurs_activite', [EntrepriseController::class, 'entreprise_secteurs_activite'])->name('entreprise_secteurs_activite');
// la route pour stocker les secteurs d'activite de l'entreprise
Route::post('/store_secteurs_activite', [EntrepriseController::class, 'store_secteurs_activite'])->name('store_secteurs_activite');
// la route pour afficher le formulaire de profil recherche
Route::get('/entreprise_adresse', [EntrepriseController::class, 'entreprise_adresse'])->name('entreprise_adresse');
// la route pour stocker les informations de l'adresse de l'entreprise
Route::post('/store_adresse', [EntrepriseController::class, 'store_adresse'])->name('store_adresse');
// la route pour afficher le formulaire du profil recherche
Route::get('/profil_create', [ProfilController::class, 'profil_create'])->name('profil_create');
// la route pour stocker les informations du profil recherche
Route::post('/store_profil', [ProfilController::class, 'store_profil'])->name('store_profil');
// la route pour afficher le formulaire du profil rechercher suite
Route::get('/profil_create_suite', [ProfilController::class, 'profil_create_suite'])->name('profil_create_suite');
// la route pour stocker la profil rechercher(suite)
Route::post('/store_profil_suite', [ProfilController::class, 'store_profil_suite'])->name('store_profil_suite');
// la route pour afficher le formulaire des formations
Route::get('/profil_create_formations', [ProfilController::class, 'formation_create'])->name('profil_formations');
// la route pour stocker les informations des formations du profil
Route::post('/store_formations', [ProfilController::class, 'store_formations'])->name('store_formations');
// la route pour afficher le formulaire des experiences professionnelles
Route::get('/profil_create_experiences', [ProfilController::class, 'experience_create'])->name('profil_experiences');
// la route pour stocker les informations des experiences professionnelles du profil
Route::post('/store_experiences', [ProfilController::class, 'store_experiences'])->name('store_experiences');
// la route pour afficher le formulaire des competences techniques
Route::get('/profil_create_competences', [ProfilController::class, 'competence_create'])->name('profil_competences');
// la route pour stocker les informations des competences techniques du profil
Route::post('/store_competences', [ProfilController::class, 'store_competences'])->name('store_competences');
// la route pour afficher le formulaire des objectifs 
Route::get('/profil_create_experiences_mission', [ProfilController::class, 'objectif_create'])->name('profil_create_experience_mission');
// la route pour stocker les informations des objectifs du profil
Route::post('/store_objectifs', [ProfilController::class, 'store_objectifs'])->name('store_objectifs');
