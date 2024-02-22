<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.index')->middleware('admin');
Route::get('category/{id}',[\App\Http\Controllers\CategoryController::class,'categoryById'])->middleware('auth')->name('category');


// List all categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Show the form for creating a new category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store a newly created category in the database
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Display the specified category
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Show the form for editing the specified category
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update the specified category in the database
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Remove the specified category from the database
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
