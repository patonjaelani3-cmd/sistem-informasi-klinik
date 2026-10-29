<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LaporanController;

// ========================================
// DASHBOARD
// ========================================

Route::get('/', function () {

    $totalPasien = DB::table('pasiens')->count();
    $totalDokter = DB::table('dokters')->count();
    $totalJadwal = DB::table('jadwal_dokters')->count();

    return view('welcome', compact(
        'totalPasien',
        'totalDokter',
        'totalJadwal'
    ));

})->name('dashboard');


// ========================================
// DATA PASIEN
// ========================================

Route::resource('pasien', PasienController::class);


// ========================================
// DATA DOKTER
// ========================================

Route::resource('dokters', DokterController::class);


// ========================================
// JADWAL DOKTER
// ========================================

Route::resource('jadwal-dokter', JadwalDokterController::class);


// ========================================
// PENDAFTARAN PASIEN
// ========================================

Route::resource('pendaftaran', PendaftaranController::class)
    ->except(['show']);

    // LAPORAN
Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');