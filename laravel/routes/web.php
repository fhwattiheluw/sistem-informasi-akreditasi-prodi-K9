<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataProgramStudiController;
use App\Http\Controllers\DataKeuanganController;
use App\Http\Controllers\TabelC2Controller;
use App\Http\Controllers\TabelC3Controller;
use App\Http\Controllers\TabelC4Controller;
use App\Http\Controllers\TabelC5Controller;
use App\Http\Controllers\TabelC6Controller;
use App\Http\Controllers\TabelC7Controller;
use App\Http\Controllers\TabelC8Controller;
use App\Http\Controllers\TabelC9Controller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AutentikasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AutentikasiController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/edit', [DashboardController::class, 'edit']);

// page akun
Route::get('/akun/show', [AkunController::class, 'show']);
Route::get('/akun/index', [AkunController::class, 'index']);

// data informasi prodi
Route::get('/dataprodi', [DataProgramStudiController::class, 'index']);
Route::get('/dataprodi/edit', [DataProgramStudiController::class, 'edit']);

// data keuangan
Route::get('/datakeuangan', [DataKeuanganController::class, 'index']);
Route::get('/datakeuangan/create', [DataKeuanganController::class, 'create']);

// ====================================
// kriteria 2
// ====================================
Route::get('/kriteria2', [TabelC2Controller::class, 'index']);
// kriteria 2 > bidang pendidikan
Route::get('/kriteria2/bidang_pendidikan', [TabelC2Controller::class, 'bidang_pendidikan_index']);
Route::get('/kriteria2/bidang_pendidikan/create/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_create']);
Route::get('/kriteria2/bidang_pendidikan/edit/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_edit']);
// kriteria 2 > bidang Penelitian
Route::get('/kriteria2/bidang_penelitian', [TabelC2Controller::class, 'bidang_penelitian_index']);
Route::get('/kriteria2/bidang_penelitian/create/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_create']);
Route::get('/kriteria2/bidang_penelitian/edit/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_edit']);
// kriteria 2 > bidang PkM
Route::get('/kriteria2/bidang_pkm', [TabelC2Controller::class, 'bidang_pkm_index']);
Route::get('/kriteria2/bidang_pkm/create/{bidang}', [TabelC2Controller::class, 'bidang_pkm_create']);
Route::get('/kriteria2/bidang_pkm/edit/{bidang}', [TabelC2Controller::class, 'bidang_pkm_edit']);
// kriteria 2 > bidang Pengembangan Kelembagaan
Route::get('/kriteria2/bidang_pengembangan_kelembagaan', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_index']);
Route::get('/kriteria2/bidang_pengembangan_kelembagaan/create/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_create']);
Route::get('/kriteria2/bidang_pengembangan_kelembagaan/edit/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_edit']);

// ====================================
// kriteria 3
// ====================================
Route::get('/kriteria3', [TabelC3Controller::class, 'index']);

// ====================================
// kriteria 4
// ====================================
Route::get('/kriteria4', [TabelC4Controller::class, 'index']);

// ====================================
// kriteria 5
// ====================================
Route::get('/kriteria5', [TabelC5Controller::class, 'index']);

// ====================================
// kriteria 6
// ====================================
Route::get('/kriteria6', [TabelC6Controller::class, 'index']);

// ====================================
// kriteria 7
// ====================================
Route::get('/kriteria7', [TabelC7Controller::class, 'index']);

// ====================================
// kriteria 8
// ====================================
Route::get('/kriteria8', [TabelC8Controller::class, 'index']);

// ====================================
// kriteria 9
// ====================================
Route::get('/kriteria9', [TabelC9Controller::class, 'index']);
