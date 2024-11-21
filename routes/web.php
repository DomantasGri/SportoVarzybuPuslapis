<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Varzybos;
use App\Http\Controllers\Komandos;
use App\Http\Controllers\VarzybosController;

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
});

require __DIR__.'/auth.php';

Route::get('/kontaktai', function(){
    return view ('kontaktai');
});

Route::get('/Komandos', [Komandos::class, 'show']);

Route::get('/Zaidejai', function(){
    return view ('Zaidejai');
});

Route::get('/Varzybos', [VarzybosController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

