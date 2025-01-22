<?php

use App\Http\Controllers\Komandos;
use App\Http\Controllers\Zaidejai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKomandos;
use App\Http\Controllers\AdminVarzybos;
use App\Http\Controllers\AdminZaidejai;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VarzybosController;
use App\Http\Controllers\kontaktaiController;

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

Route::get('/kontaktai',[kontaktaiController::class, 'show'])->name('kontaktai');

Route::get('/Komandos', [Komandos::class, 'show'])->name('Komandos');

Route::get('/Zaidejai', [Zaidejai::class, 'showTaskai'])->name('Zaidejai');

Route::get('/Varzybos', [VarzybosController::class, 'index'])->name('Varzybos');

Route::get('/AdminKomanda',[AdminKomandos::class, 'rodyti'])->name('AdminKomandos');
Route::get('/AdminKomandaKurti',[AdminKomandos::class, 'create'])->name('AdminKomandaKurti');
route::post('/AdminKomanda',[AdminKomandos::class, 'storeKomanda'])->name('AdminKomanda.store');
route::get('/AdminKomandaRedaguoti/{komandos}/edit',[AdminKomandos::class, 'edit'])->name('AdminKomandaRedaguoti');
route::put('/AdminKomandaRedaguoti/{komandos}/update',[AdminKomandos::class, 'update'])->name('AdminKomandaRedaguoti.update');
route::delete('/AdminKomandaRedaguoti/{komandos}/delete',[AdminKomandos::class, 'delete'])->name('AdminKomandaDelete');

Route::get('/AdminZaidejai',[AdminZaidejai::class, 'rodyti'])->name('AdminZaidejai');
route::get('/AdminZaidejaiKurti',[AdminZaidejai::class, 'create'])->name('AdminZaidejaiKurti');
route::post('/AdminZaidejai',[AdminZaidejai::class, 'store'])->name('AdminZaidejai.store');
Route::get('AdminZaidejaiRedaguoti/{zaidejas}/edit', [AdminZaidejai::class, 'edit'])->name('AdminZaidejaiRedaguoti');
Route::put('AdminZaidejaiRedaguoti/{zaidejas}/update', [AdminZaidejai::class, 'update'])->name('AdminZaidejaiRedaguoti.update');
route::delete('AdminZaidejaiRedaguoti/{zaidejas}/delete', [AdminZaidejai::class, 'delete'])->name('AdminZaidejaiDelete');

Route::get('/AdminVarzybos',[AdminVarzybos::class, 'rodyti'])->name('AdminVarzybos');
Route::get('AdminVarzybosKurti',[AdminVarzybos::class, 'create'])->name('AdminVarzybosKurti');
Route::post('/AdminVarzybos',[AdminVarzybos::class, 'store'])->name('AdminVarzybos.store');
route::get('AdminVarzybosRedaguoti/{varzybos}/edit', [AdminVarzybos::class, 'edit'])->name('AdminVarzybosRedaguoti');
route::put('AdminVarzybosRedaguoti/{varzybos}/update', [AdminVarzybos::class, 'update'])->name('AdminVarzybosRedaguoti.update');
route::delete('AdminVarzybosRedaguoti/{varzybos}/delete', [AdminVarzybos::class, 'delete'])->name('AdminVarzybosDelete');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/Komandos/{id}', [Komandos::class, 'showKomanda']);