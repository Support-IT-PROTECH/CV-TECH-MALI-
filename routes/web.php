<?php

use App\Http\Controllers\CompetencePersonnelController;
use App\Http\Controllers\CompetenceTechniqueController;
use App\Http\Controllers\ExperienceDetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\OffreDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job-infos/{offre}', [App\Http\Controllers\HomeController::class, 'job_infos'])->name('job-infos');
Route::get('/company-infos', [App\Http\Controllers\HomeController::class, 'company_infos'])->name('company-infos');
Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobs_list'])->name('jobs-list');
Route::get('/top-profile', [App\Http\Controllers\HomeController::class, 'top_profile'])->name('top-profile');

/** Offres */

Route::prefix("/offres")->group(function () {
    Route::get('/', [OffreController::class, 'index'])->name('offre.index');
    Route::get('/create', [OffreController::class, 'create'])->name('offre.create');
    Route::post("/create", [OffreController::class, 'store'])->name('offre.store');
    Route::get("/{offre}", [OffreController::class, 'show'])->name('offre.show');
    Route::get("/{offre}/edit", [OffreController::class, 'edit'])->name('offre.edit');
    Route::patch("/{offre}", [OffreController::class, 'update'])->name('offre.update');
    Route::get('/delete/{offre}', [OffreController::class, 'destroy'])->name('offre.destroy');
});