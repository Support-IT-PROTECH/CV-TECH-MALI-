<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TravailController;
use App\Models\Travail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
    ->name('index');

Route::get("/travail", [TravailController::class, 'index'])->name('travail.index');
Route::get("/travail/create", [TravailController::class, "create"])
    ->name('travail.create');
Route::post("/travail/store", [TravailController::class, "store"])
    ->name('travail.store');
Route::get('/travail/{id}', function ($id) {
    $travail = Travail::find($id);

    return view('travail.show', ['travail' => $travail]);
})
    ->name('travail.show');
Route::get('/travail/{id}/edit', function ($id) {
    $travail = Travail::find($id);

    return view('travail.edit', ['travail' => $travail]);
})
    ->name('travail.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');