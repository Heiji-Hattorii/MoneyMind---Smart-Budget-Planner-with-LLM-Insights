<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index'); 
    Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store'); 
    Route::get('/categories/{id}/edit', [CategorieController::class, 'edit'])->name('categories.edit'); 
    Route::put('/categories/{id}', [CategorieController::class, 'update'])->name('categories.update'); 
    Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy'); 
});
require __DIR__.'/auth.php';
