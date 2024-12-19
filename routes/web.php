<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\profileController;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexcontroller::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/job-infos', [App\Http\Controllers\HomeController::class, 'job_infos'])->name('job-infos');

Route::get('/company-infos/{entreprise}', [App\Http\Controllers\HomeController::class, 'company_infos'])->name('company-infos');

Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobs_list'])->name('jobs-list');

Route::get('/top-profile/{profile}', [App\Http\Controllers\HomeController::class, 'top_profile'])->name('top-profile');

Route::get('/entreprise_create', [EntrepriseController::class, 'index'])->name('entreprise_create');

Route::post('/entreprise_store', [EntrepriseController::class, 'store'])->name('entreprise_store');

Route::get('/profile_create', [profileController::class, 'index'])->name('profile_create');

Route::post('/profile_store', [profileController::class, 'store'])->name('profile_store');

Route::get('/formation_create', [formationController::class, 'index'])->name('formation');

Route::post('/formation_store', [formationController::class, 'store'])->name('formation_store');
