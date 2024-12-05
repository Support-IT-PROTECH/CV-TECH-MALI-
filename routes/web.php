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
Route::get('/job-list', [App\Http\Controllers\HomeController::class, 'jobs_list'])->name('jobs-list');
Route::get('/top-profile', [App\Http\Controllers\HomeController::class, 'top_profile'])->name('top-profile');
