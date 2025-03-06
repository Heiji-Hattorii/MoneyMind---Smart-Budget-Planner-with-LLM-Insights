<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SouhaitController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GoalController;
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


    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    Route::get('admin/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/user/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('admin/user/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::get('dashy', [ProfileController::class, 'dashboard']);
    Route::post('update-salary', [ProfileController::class, 'updateSalary']);
    Route::post('add-expense', [ExpenseController::class, 'addExpense'])->name('add-expense');
    Route::get('expenses', [ExpenseController::class, 'listExpenses'])->name('expenses');
    Route::post('set-goal', [GoalController::class, 'setGoal'])->name('goals');
    Route::get('set-goal', [GoalController::class, 'showForm']);


    Route::get('budget-summary', [BudgetController::class, 'getBudgetSummary'])->name('budget-summary');
    


Route::get('/wishlist', [SouhaitController::class, 'index'])->name('wishlist');
Route::post('/add-wishlist', [SouhaitController::class, 'store'])->name('wishlist.add');
Route::post('/remove-wishlist', [SouhaitController::class, 'destroy'])->name('wishlist.remove');

});
require __DIR__.'/auth.php';
