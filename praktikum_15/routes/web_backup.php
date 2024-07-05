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

// Route::resource('/admin/dokter', DokterController::class);
Route::get('/admin/dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('/admin/dokter/create', [DokterController::class, 'create'])->name('dokter.create');
Route::post('/admin/dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('/admin/dokter/{dokter}', [DokterController::class, 'show'])->name('dokter.show');
Route::get('/admin/dokter/{dokter}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
Route::put('/admin/dokter/{dokter}', [DokterController::class, 'update'])->name('dokter.update');
Route::delete('/admin/dokter/{dokter}', [DokterController::class, 'destroy'])->name('dokter.destroy');

// Route::resource('/admin/periksa', PeriksaController::class);
Route::get('/admin/periksa', [PeriksaController::class, 'index'])->name('periksa.index');
Route::get('/admin/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create');
Route::post('/admin/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::get('/admin/periksa/{periksa}', [PeriksaController::class, 'show'])->name('periksa.show');
Route::get('/admin/periksa/{periksa}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit');
Route::put('/admin/periksa/{periksa}', [PeriksaController::class, 'update'])->name('periksa.update');
Route::delete('/admin/periksa/{periksa}', [PeriksaController::class, 'destroy'])->name('periksa.destroy');

// Route::resource('/admin/unit_kerja', UnitKerjaController::class);
Route::get('/admin/unit_kerja', [UnitKerjaController::class, 'index'])->name('unitkerjas.index');
Route::get('/admin/unit_kerja/create', [UnitKerjaController::class, 'create'])->name('unitkerjas.create');
Route::post('/admin/unit_kerja/store', [UnitKerjaController::class, 'store'])->name('unitkerjas.store');
Route::get('/admin/unit_kerja/{unitkerja}', [UnitKerjaController::class, 'show'])->name('unitkerjas.show');
Route::get('/admin/unit_kerja/{unitkerja}/edit', [UnitKerjaController::class, 'edit'])->name('unitkerjas.edit');
Route::put('/admin/unit_kerja/{unitkerja}', [UnitKerjaController::class, 'update'])->name('unitkerjas.update');
Route::delete('/admin/unit_kerja/{unitkerja}', [UnitKerjaController::class, 'destroy'])->name('unitkerjas.destroy');

// Route::resource('/admin/kelurahan', KelurahanController::class);
Route::get('/admin/kelurahan', [KelurahanController::class, 'index'])->name('kelurahans.index');
Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahans.create');
Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahans.store');
Route::get('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'show'])->name('kelurahans.show');
Route::get('/admin/kelurahan/{kelurahan}/edit', [KelurahanController::class, 'edit'])->name('kelurahans.edit');
Route::put('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'update'])->name('kelurahans.update');
Route::delete('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahans.destroy');