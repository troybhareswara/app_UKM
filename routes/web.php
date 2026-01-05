<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| ROOT / SPLASH
|--------------------------------------------------------------------------
| Halaman awal → loading logo
*/
Route::get('/', function () {
    return view('splash'); // splash screen
})->name('root');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
| Login, Register, Logout, dll (bawaan Laravel UI)
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
| Halaman setelah login
*/
Route::get('/dashboard', function () {
    return view('home');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| MAHASISWA ROUTES
|--------------------------------------------------------------------------
| Semua route mahasiswa harus login
*/
Route::middleware(['auth'])->group(function () {

    // Semua user login bisa lihat data
    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])
        ->name('mahasiswas.index');

    // Hanya ADMIN
    Route::middleware(['admin'])->group(function () {

        Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])
            ->name('mahasiswas.create');

        Route::post('/mahasiswas', [MahasiswaController::class, 'store'])
            ->name('mahasiswas.store');

        Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
            ->name('mahasiswas.edit');

        Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])
            ->name('mahasiswas.update');

        Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])
            ->name('mahasiswas.destroy');

        Route::resource('kegiatan', KegiatanController::class);

    });
});
