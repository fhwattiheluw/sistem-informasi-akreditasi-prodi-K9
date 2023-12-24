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

Route::get('/',[DashboardController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

// data informasi prodi
Route::get('/dataprodi', [DataProgramStudiController::class, 'index']);

// data keuangan
Route::get('/datakeuangan', [DataKeuanganController::class, 'index']);

// kriteria 2
Route::get('/kriteria2', [TabelC2Controller::class, 'index']);
