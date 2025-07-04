<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

// Dashboard & Landing
Route::get('/', fn () => view('welcome'));
Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth'])->name('dashboard');

// Auth Routes → bisa pakai Laravel Breeze / Fortify / Jetstream
require __DIR__.'/auth.php';

// Categories (CRUD)
Route::resource('categories', CategoryController::class)->middleware('auth');

// Tasks (CRUD)
Route::resource('tasks', TaskController::class)->middleware('auth');

// Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
