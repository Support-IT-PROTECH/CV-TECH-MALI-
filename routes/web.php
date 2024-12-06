<?php

use App\Http\Controllers\OffreController;
use App\Http\Controllers\OffreDetailController;
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

/** Offres */

Route::get('/offres', [OffreController::class, 'index'])->name('offre.index');
Route::get('/offres/create', [OffreController::class, 'create'])->name('offre.create');
Route::post("/offres/create", [OffreController::class, 'store'])->name('offre.store');
Route::get("/offres/{offre}", [OffreController::class, 'show'])->name('offre.show');
Route::get("/offres/{offre}/edit", [OffreController::class, 'edit'])->name('offre.edit');
Route::patch("/offres/{offre}", [OffreController::class, 'update'])->name('offre.update');
Route::get('/delete/{offre}', [OffreController::class, 'destroy'])->name('offre.destroy');;

// Offres Details
Route::get("/details", [OffreDetailController::class, 'index'])->name('detail.index');
Route::get("/details/create", [OffreDetailController::class, 'create'])->name('detail.create');
Route::post("/details/create", [OffreDetailController::class, 'store'])->name('detail.store');
