
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Original POS Homepage
Route::get('/', [PageController::class, 'index'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Breeze Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Protected POS Management Routes
Route::middleware(['auth'])->group(function () {

    // Customer Accounts
    Route::resource('customers', CustomerController::class)
        ->except(['show', 'destroy'])
        ->names(['index' => 'customers']);

    // User Accounts
    Route::resource('users', UserController::class)
        ->except(['show', 'destroy'])
        ->names(['index' => 'users']);

    // Breeze Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Breeze Authentication Routes
require __DIR__.'/auth.php';
