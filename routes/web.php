<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TravailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
    ->name('index');

Route::get("/travail", [TravailController::class, 'index'])->name('travail.index');
Route::get("/travail/create", [TravailController::class, "create"])
    ->name('travail.create');
Route::post("/travail/store", [TravailController::class, "store"])
    ->name('travail.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');