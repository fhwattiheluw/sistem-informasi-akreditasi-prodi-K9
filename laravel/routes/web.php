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
// ====================================
// dashboard
// ====================================
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/edit', [DashboardController::class, 'edit']);

// ====================================
// akun
// ====================================
Route::get('/akun/show', [AkunController::class, 'show']);
Route::get('/akun/index', [AkunController::class, 'index']);

// ====================================
//  informasi prodi
// ====================================

Route::get('/dataprodi', [DataProgramStudiController::class, 'index'])->name('dataprodi.index');
Route::get('/dataprodi/edit', [DataProgramStudiController::class, 'edit'])->name('dataprodi.edit');
Route::put('/dataprodi/{id}', [DataProgramStudiController::class, 'update'])->name('dataprodi.update');

// ====================================
// data keuangan
// ====================================
Route::get('/datakeuangan', [DataKeuanganController::class, 'index'])->name('datakeuangan.index');
Route::get('/datakeuangan/create', [DataKeuanganController::class, 'create'])->name('datakeuangan.create');
Route::post('/datakeuangan/store', [DataKeuanganController::class, 'store'])->name('datakeuangan.store');
Route::get('/datakeuangan/{id}/edit', [DataKeuanganController::class, 'edit'])->name('datakeuangan.edit');
Route::put('/datakeuangan/{id}/update', [DataKeuanganController::class, 'update'])->name('datakeuangan.update');
Route::get('/datakeuangan/{id}/delete', [DataKeuanganController::class, 'destroy'])->name('datakeuangan.delete');

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
// Kriteria 3 > Tabel Mahasiswa Reguler
Route::get('/kriteria3/mahasiswa_reguler', [TabelC3Controller::class, 'mahasiswa_reguler_index']);
Route::get('/kriteria3/mahasiswa_reguler/create', [TabelC3Controller::class, 'mahasiswa_reguler_create']);
Route::get('/kriteria3/mahasiswa_reguler/edit', [TabelC3Controller::class, 'mahasiswa_reguler_edit']);
// Kriteria 3 > Calon Mahasiswa dalam negeri
Route::get('/kriteria3/mahasiswa_dalam_negeri', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_index']);
Route::get('/kriteria3/mahasiswa_dalam_negeri/create', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_create']);
Route::get('/kriteria3/mahasiswa_dalam_negeri/edit', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_edit']);
// Kriteria 3 > Calon Mahasiswa luar negeri
Route::get('/kriteria3/mahasiswa_luar_negeri', [TabelC3Controller::class, 'mahasiswa_luar_negeri_index']);
Route::get('/kriteria3/mahasiswa_luar_negeri/create', [TabelC3Controller::class, 'mahasiswa_luar_negeri_create']);
Route::get('/kriteria3/mahasiswa_luar_negeri/edit', [TabelC3Controller::class, 'mahasiswa_luar_negeri_edit']);
// Kriteria 3 > Program Layanan Dan Pembinaan Minat, Bakat, Penalaran, Kesejahteraan, Dan Keprofesian Mahasiswa
Route::get('/kriteria3/program_layanan', [TabelC3Controller::class, 'program_layanan_index']);
Route::get('/kriteria3/program_layanan/create', [TabelC3Controller::class, 'program_layanan_create']);
Route::get('/kriteria3/program_layanan/edit', [TabelC3Controller::class, 'program_layanan_edit']);

// ====================================
// kriteria 4
// ====================================
Route::get('/kriteria4', [TabelC4Controller::class, 'index']);
// Kriteria 4 > DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS
Route::get('/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps', [TabelC4Controller::class, 'dtps_bidang_Keahlian_sesuai_dengan_bidang_ps_index']);
Route::get('/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps/create', [TabelC4Controller::class, 'dtps_bidang_Keahlian_sesuai_dengan_bidang_ps_create']);
Route::get('/kriteria4/dtps_bidang_Keahlian_sesuai_dengan_bidang_ps/edit', [TabelC4Controller::class, 'dtps_bidang_Keahlian_sesuai_dengan_bidang_ps_edit']);
// Kriteria 4 > DTPS yang Bidang Keahliannya di Luar Bidang PS
Route::get('/kriteria4/dtps_yang_bidang_keahlian_luar_bidang_ps', [TabelC4Controller::class, 'dtps_yang_bidang_keahlian_luar_bidang_ps_index']);
Route::get('/kriteria4/dtps_yang_bidang_keahlian_luar_bidang_ps/create', [TabelC4Controller::class, 'dtps_yang_bidang_keahlian_luar_bidang_ps_create']);
Route::get('/kriteria4/dtps_yang_bidang_keahlian_luar_bidang_ps/edit', [TabelC4Controller::class, 'dtps_yang_bidang_keahlian_luar_bidang_ps_edit']);
// Kriteria 4 > Tabel Rasio DTPS terhadap Mahasiswa Reguler
Route::get('/kriteria4/rasio_dtps_terhadap_mahasiswa_reguler/index', [TabelC4Controller::class, 'rasio_dtps_terhadap_mahasiswa_reguler_index']);
// Kriteria 4 > Tabel Beban Kerja Dosen DTPS
Route::get('/kriteria4/beban_kerja_dosen_dtps', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_index']);
Route::get('/kriteria4/beban_kerja_dosen_dtps/create', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_create']);
Route::get('/kriteria4/beban_kerja_dosen_dtps/edit', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_edit']);
// Kriteria 4 > Tabel Kegiatan Mengajar Dosen Tetap
Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_index']);
Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap/create', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_create']);
Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap/edit', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_edit']);
// Kriteria 4 > Tabel Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi
Route::get('/kriteria4/jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi', [TabelC4Controller::class, 'jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_index']);
Route::get('/kriteria4/jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi/create', [TabelC4Controller::class, 'jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_create']);
Route::get('/kriteria4/jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi/edit', [TabelC4Controller::class, 'jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_edit']);
// Kriteria 4 > Tabel Prestasi DTPS
Route::get('/kriteria4/prestasi_dtps', [TabelC4Controller::class, 'prestasi_dtps_index']);
Route::get('/kriteria4/prestasi_dtps/create', [TabelC4Controller::class, 'prestasi_dtps_create']);
Route::get('/kriteria4/prestasi_dtps/edit', [TabelC4Controller::class, 'prestasi_dtps_edit']);

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
Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_index']);
Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian/create', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_create']);
Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian/edit', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_edit']);

// ====================================
// kriteria 8
// ====================================
Route::get('/kriteria8', [TabelC8Controller::class, 'index']);
Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_index']);
Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm/create', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_create']);
Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm/edit', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_edit']);

// ====================================
// kriteria 9
// ====================================
Route::get('/kriteria9', [TabelC9Controller::class, 'index']);
