<?php

use App\Http\Controllers\EntrepriseController;
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
Route::post('/store_valeur_entreprise', [EntrepriseController::class, 'store_valeur_entreprise'])->name('store_valeur_entreprise');
//la route pour afficher le formulaire des secteurs d'activite 
Route::get('/entreprise_secteurs_activite', [EntrepriseController::class, 'entreprise_secteurs_activite'])->name('store_secteurs_activite');
// la route pour stocker les secteurs d'activite de l'entreprise
Route::post('/store_secteurs_activite', [EntrepriseController::class, 'store_secteurs_activite'])->name('store_secteurs_activite');
