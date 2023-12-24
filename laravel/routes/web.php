<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataProgramStudiController;
use App\Http\Controllers\DataKeuanganController;

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
