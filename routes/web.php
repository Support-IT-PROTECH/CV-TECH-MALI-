<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TravailController;
use App\Models\Travail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
    ->name('index');

Route::get("/travails", [TravailController::class, 'index'])->name('travail.index');
Route::get("/travails/create", [TravailController::class, "create"])
    ->name('travail.create');
Route::post("/travails/store", [TravailController::class, "store"])
    ->name('travail.store');
Route::get('/travails/{id}', [TravailController::class, 'show'])
    ->name('travail.show');
Route::get('/travails/{id}/edit', [TravailController::class, 'edit'])
    ->name('travail.edit');
Route::patch('/travails/{travail}', [TravailController::class, 'update'])
    ->name('travail.update');
Route::delete('/travails/{travail}', [TravailController::class, 'destroy']);


Route::get('/entreprises', [EntrepriseController::class, 'index']);
Route::get('/entreprises/offres', [EntrepriseController::class, 'offre']);
Route::get('/entreprises/pages', [EntrepriseController::class, 'page']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
