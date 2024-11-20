<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::post('/store', [HomeController::class, 'store'])->name('store');
// Route::get('/downloadpdf/{id}', [HomeController::class, 'downloadpdf'])->name('downloadpdf');
Route::get('/pdf/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);

    if (!file_exists($path)) {
        abort(404); // Si le fichier n'existe pas, retournez une erreur 404
    }

    return response()->file($path);
})->name('upload');
Route::get('edit/{depot}', [HomeController::class, 'edit'])->name('edit');
Route::put('edit/{depot}', [HomeController::class, 'update'])->name('update');
Route::get('delete/{depot}', [HomeController::class, 'delete'])->name('delete');
