<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;


/*
|--------------------------------------------------------------------------
| ROOT / SPLASH
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('splash');
})->name('root');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('home');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // ===== MAHASISWA =====
    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])
        ->name('mahasiswas.index');

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
    });

    // // ===== KEGIATAN =====
    // Route::resource('kegiatan', KegiatanController::class);
});
