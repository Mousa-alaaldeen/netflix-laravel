<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
})->name('welcome');

Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::resource('/movie', MovieController::class); 
});

Route::post('/movies/{movie}/rate', [MovieController::class, 'rate'])->name('movies.rate');


Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['check.login'])->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
});

require __DIR__.'/auth.php';
