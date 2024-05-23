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

Route::get('/admin/pasien', [PasienController::class, 'index']);

Route::get('/admin/pegawai', [PegawaiController::class, 'index']);

Route::get('/admin/dokter', [DokterController::class, 'index']);

Route::get('/admin/periksa', [PeriksaController::class, 'index']);

Route::get('/admin/unitkerja', [UnitKerjaController::class, 'index']);

Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);