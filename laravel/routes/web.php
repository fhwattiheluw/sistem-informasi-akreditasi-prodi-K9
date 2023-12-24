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

// page akun
Route::get('/akun/show', [AkunController::class, 'show']);
Route::get('/akun/index', [AkunController::class, 'index']);

// data informasi prodi
Route::get('/dataprodi', [DataProgramStudiController::class, 'index']);

// data keuangan
Route::get('/datakeuangan', [DataKeuanganController::class, 'index']);

// kriteria 2
Route::get('/kriteria2', [TabelC2Controller::class, 'index']);

// kriteria 3
Route::get('/kriteria3', [TabelC3Controller::class, 'index']);

// kriteria 4
Route::get('/kriteria4', [TabelC4Controller::class, 'index']);

// kriteria 5
Route::get('/kriteria5', [TabelC5Controller::class, 'index']);

// kriteria 6
Route::get('/kriteria6', [TabelC6Controller::class, 'index']);

// kriteria 7
Route::get('/kriteria7', [TabelC7Controller::class, 'index']);

// kriteria 8
Route::get('/kriteria8', [TabelC8Controller::class, 'index']);

// kriteria 9
Route::get('/kriteria9', [TabelC9Controller::class, 'index']);
