<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job-infos', [App\Http\Controllers\HomeController::class, 'job_infos'])->name('job-infos');
Route::get('/company-infos', [App\Http\Controllers\HomeController::class, 'company_infos'])->name('company-infos');
Route::get('/company-lists', [App\Http\Controllers\HomeController::class, 'company_lists'])->name('company-lists');
Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobs_list'])->name('jobs-list');
Route::get('/top-profile', [App\Http\Controllers\HomeController::class, 'top_profile'])->name('top-profile');
Route::get('/a-propos', [App\Http\Controllers\HomeController::class, 'a_propos'])->name('a-propos');


Route::prefix('userauth')->group(function () {
    Route::get('/', function () { return view('userAuth.home'); })->name('admin.home');
    Route::get('/profile', function () { return view('userAuth.profile'); })->name('admin.profile');
    Route::get('/candidature', function () { return view('userAuth.candidature'); })->name('admin.candidature');
    Route::get('/notify', function () { return view('userAuth.notify'); })->name('admin.notify');
});

Route::prefix('company')->group(function () {
    Route::get('/', function () { return view('companies.home'); })->name('company.home');
    Route::get('/profile', function () { return view('companies.profile'); })->name('company.profile');
    Route::get('/offre', function () { return view('companies.offre'); })->name('company.offre');
    Route::get('/notify', function () { return view('companies.notify'); })->name('company.notify');
});