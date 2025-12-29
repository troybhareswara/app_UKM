<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard'); // Kita beri nama route ini 'dashboard'


Auth::routes(); // Rute bawaan Login/Register

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Grup Rute yang membutuhkan Login
Route::middleware(['auth'])->group(function () {
    
    // Semua user login bisa lihat list
    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');

    // Hanya Admin yang bisa Create, Edit, Delete, Store, Update
    Route::middleware(['admin'])->group(function () {
        Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
        Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
        Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
        Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
        Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
    });
});