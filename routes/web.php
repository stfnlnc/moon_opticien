<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//
Route::get('/', function () {
    return view('main.home');
})->name('home');


// Admin routes : add middleware(['role:admin'])
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->except([
        'show'
    ]);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';


