<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'index']);

// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat route nilai dengan view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

// Buat route ke pasien dengan view pasien
Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

Route::get('/admin/pegawai', [PegawaiController::class, 'index']);

Route::resource('/admin/dokter', DokterController::class);

Route::resource('/admin/periksa', PeriksaController::class);

Route::resource('/admin/unit_kerja', UnitKerjaController::class);

Route::resource('/admin/kelurahan', KelurahanController::class);