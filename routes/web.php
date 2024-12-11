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

Route::get('/offres', [OffreController::class, 'index'])->name('offre.index');
Route::get('/offres/create', [OffreController::class, 'create'])->name('offre.create');
Route::post("/offres/create", [OffreController::class, 'store'])->name('offre.store');
Route::get("/offres/{offre}", [OffreController::class, 'show'])->name('offre.show');
Route::get("/offres/{offre}/edit", [OffreController::class, 'edit'])->name('offre.edit');
Route::patch("/offres/{offre}", [OffreController::class, 'update'])->name('offre.update');
Route::get('/delete/{offre}', [OffreController::class, 'destroy'])->name('offre.destroy');;

/**  Offres Details  */

Route::get("/details", [OffreDetailController::class, 'index'])->name('detail.index');
Route::get("/details/create", [OffreDetailController::class, 'create'])->name('detail.create');
Route::post("/details/create", [OffreDetailController::class, 'store'])->name('detail.store');
Route::get("/details/{offreDetail}", [OffreDetailController::class, 'show'])->name('detail.show');
Route::get("/details/{offreDetail}/edit", [OffreDetailController::class, 'edit'])->name('detail.edit');
Route::patch("/details/{offreDetail}", [OffreDetailController::class, 'update'])->name('detail.update');
Route::delete("/details/{offreDetail}", [OffreDetailController::class, 'destroy'])->name('detail.delete');

// Offres Competences Personnelles

Route::get("/personels", [CompetencePersonnelController::class, "index"]);
Route::get("/personels/create", [CompetencePersonnelController::class, "create"]);
Route::post("/personels/create", [CompetencePersonnelController::class, "store"]);
Route::get("/personels/{competencePersonnelle}", [CompetencePersonnelController::class, "show"]);
Route::get("/personels/{competencePersonnelle}/edit", [CompetencePersonnelController::class, "edit"]);
Route::patch("/personels/{competencePersonnelle}/edit", [CompetencePersonnelController::class, "update"]);
Route::delete("/personels/{competencePersonnelle}", [CompetencePersonnelController::class, "destroy"]);


// Offres Competences Techniques
Route::get("/techniques", [CompetenceTechniqueController::class, "index"]);
Route::get("/techniques/create", [CompetenceTechniqueController::class, "create"]);
Route::post("/techniques/create", [CompetenceTechniqueController::class, "store"]);
Route::get("/techniques/{competenceTechnique}", [CompetenceTechniqueController::class, "show"]);
Route::get("/techniques/{competenceTechnique}/edit", [CompetenceTechniqueController::class, "edit"]);
Route::patch("/techniques/{competenceTechnique}/edit", [CompetenceTechniqueController::class, "update"]);
Route::delete("/techniques/{competenceTechnique}", [CompetenceTechniqueController::class, "destroy"]);

// Experiences Details
Route::get("/experiences", [ExperienceDetailController::class, "index"])->name("experiences.index");
Route::get("/experiences/create", [ExperienceDetailController::class, "create"])->name("experiences.create");
Route::post("/experiences/create", [ExperienceDetailController::class, "store"])->name("experiences.store");
Route::get("/experiences/{experienceDetail}", [ExperienceDetailController::class, "show"])->name("experiences.show");
Route::get("/experiences/{experienceDetail}/edit", [ExperienceDetailController::class, "edit"])->name("experiences.edit");
Route::patch("/experiences/{experienceDetail}/edit", [ExperienceDetailController::class, "update"])->name("experiences.update");
Route::delete("/experiences/{experienceDetail}", [ExperienceDetailController::class, "destroy"])->name("experiences.destroy");
