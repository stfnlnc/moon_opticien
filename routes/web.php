<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//
Route::get('/', function () {
    return view('main.home');
})->name('home');


Route::middleware(['role:admin'])->prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->except([
        'show'
    ]);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';


