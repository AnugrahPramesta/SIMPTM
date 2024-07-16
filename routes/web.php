<?php

use App\Http\Controllers\Akun;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiabetesController;
use App\Http\Controllers\GifController;
use App\Http\Controllers\HipertensiController;
use App\Http\Controllers\KankerServikController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PosbinduController;
use App\Http\Controllers\UsiaProduktifController;
use App\Models\Diabetes;
use App\Models\Gif;
use App\Models\KankerServik;
use App\Models\Posbindu;
use App\Models\UsiaProduktif;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [LandingPageController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Route::get('/kecamatan', [KecamatanController::class, 'index']);
    // Route::post('/tambahkec', [KecamatanController::class, 'tambahkec']);

    Route::get('/data-hipertensi', [HipertensiController::class, 'index']);
    Route::post('/editHipertensi/{id}', [HipertensiController::class, 'editData']);

    Route::get('/data-kankerserviks', [KankerServikController::class, 'index']);
    Route::post('/editServiks/{id}', [KankerServikController::class, 'editData']);

    Route::get('/data-diabetesmelitus', [DiabetesController::class, 'index']);
    Route::post('/editDiabetes/{id}', [DiabetesController::class, 'editData']);

    Route::get('/data-gif', [GifController::class, 'index']);
    Route::post('/editGIF/{id}', [GifController::class, 'editData']);

    Route::get('/data-usia-produktif', [UsiaProduktifController::class, 'index']);
    Route::post('/editUsiaProduktif/{id}', [UsiaProduktifController::class, 'editData']);

    Route::get('/posbindu', [PosbinduController::class, 'index']);
    Route::post('/tambahPosbindu', [PosbinduController::class, 'tambahData']);
    Route::post('/editPosbindu/{id}', [PosbinduController::class, 'editData']);
    Route::get('//hapusPosbindu/{id}', [PosbinduController::class, 'hapusData']);


    Route::get('/akun', [AkunController::class, 'index']);
    Route::post('/editAkun/{id}', [AkunController::class, 'editAkun']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
