<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/en-magasin', [MainController::class, 'shop_service'])->name('shop_service');
    Route::get('/a-domicile', [MainController::class, 'home_service'])->name('home_service');
    Route::get('/nos-lunettes', [MainController::class, 'glasses'])->name('glasses');
    Route::get('/nos-lentilles', [MainController::class, 'lenses'])->name('lenses');
    Route::get('/a-propos', [MainController::class, 'about'])->name('about');
    Route::get('/nous-contacter', [MainController::class, 'contact'])->name('contact');
    Route::post('/nous-contacter', [MainController::class, 'contact_store'])->name('contact_store');
    Route::get('/mentions-legales', [MainController::class, 'legal_notice'])->name('legal_notice');
    Route::get('/politique-de-confidentialite', [MainController::class, 'privacy_policy'])->name('privacy_policy');
});



Route::middleware(['role:admin'])->prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->except([
        'show', 'create'
    ]);
    Route::resource('options', OptionController::class)->except([
        'edit', 'create', 'store', 'destroy', 'show'
    ]);
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::middleware(['auth'])->get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware(['auth'])->patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
Route::middleware(['auth'])->delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';


