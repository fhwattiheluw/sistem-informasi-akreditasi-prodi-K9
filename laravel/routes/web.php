<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    DataProgramStudiController,
    DataKeuanganController,
    TabelC2Controller,
    TabelC3Controller,
    TabelC4Controller,
    TabelC5Controller,
    TabelC6Controller,
    TabelC7Controller,
    TabelC8Controller,
    TabelC9Controller,
    AkunController,
    AutentikasiController,
    RepositoryController,
    DokumenController
};

// redirect route ke route login
Route::redirect('/', '/login');
// lupa password
Route::get('/forgot',[AutentikasiController::class, 'forgot_form']);

// buatkan code route untuk login dan logout. sertakan nama route 
Route::get('/login', [AutentikasiController::class, 'index'])->name('login');
Route::post('/login', [AutentikasiController::class, 'login'])->name('login.submit');
Route::get('/logout', [AutentikasiController::class, 'logout'])->name('logout')->middleware('auth');;


// ====================================
// dashboard
// ====================================
Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/dashboard/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
});

// ====================================
// akun
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/akun/profil', [AkunController::class, 'profil'])->name('akun.profil');
    Route::get('/akun/index', [AkunController::class, 'index'])->name('akun.index');
    Route::get('/akun/create', [AkunController::class, 'create'])->name('akun.create');
    Route::post('/akun/store', [AkunController::class, 'store'])->name('akun.store');
    Route::get('/akun/{id}/edit', [AkunController::class, 'edit'])->name('akun.edit');
    Route::put('/akun/{id}', [AkunController::class, 'update'])->name('akun.update');
    Route::get('/akun/{email}', [AkunController::class, 'destroy'])->name('akun.destroy');
    Route::get('/akun/{akun}', [AkunController::class, 'show'])->name('akun.show');
    Route::put('/akun/profil/update', [AkunController::class, 'profilUpdate'])->name('akun.profil.update');
});

// ====================================
// Repository
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/repository/semua', [RepositoryController::class, 'index'])->name('repository.semua');
    Route::get('/repository/form', [RepositoryController::class, 'formRepository'])->name('repository.form');
    Route::post('/repository/store', [RepositoryController::class, 'store'])->name('repository.store');
    Route::get('/repository/{id}/edit', [RepositoryController::class, 'edit'])->name('repository.edit');
    Route::put('/repository/{id}', [RepositoryController::class, 'update'])->name('repository.update');
    Route::delete('/repository/{id}', [RepositoryController::class, 'destroy'])->name('repository.delete');
    Route::get('/repository/show/{id}', [RepositoryController::class, 'show'])->name('repository.show');
});

// ====================================
// Dokumen
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/dokumen/create', [DokumenController::class, 'create'])->name('dokumen.create');
    Route::post('/dokumen/store', [DokumenController::class, 'store'])->name('dokumen.store');
    Route::get('/dokumen/{id}/edit', [DokumenController::class, 'edit'])->name('dokumen.edit');
    Route::put('/dokumen/{id}', [DokumenController::class, 'update'])->name('dokumen.update');
    Route::get('/dokumen/{id}', [DokumenController::class, 'destroy'])->name('dokumen.delete');
});

// ====================================
//  program studi
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/dataprodi', [DataProgramStudiController::class, 'index'])->name('dataprodi.index');
    Route::get('/dataprodi/edit', [DataProgramStudiController::class, 'edit'])->name('dataprodi.edit');
    Route::put('/dataprodi/{id}', [DataProgramStudiController::class, 'update'])->name('dataprodi.update');

    Route::get('/dataprodi/form', [DataProgramStudiController::class, 'create'])->name('dataprodi.create');
    Route::get('/dataprodi/semua/', [DataProgramStudiController::class, 'semua'])->name('dataprodi.semua');
    Route::post('/dataprodi/store', [DataProgramStudiController::class, 'store'])->name('dataprodi.store');
    
    Route::get('/dataprodi/{id}/edit', [DataProgramStudiController::class, 'editById'])->name('dataprodi.editById');
    Route::delete('/dataprodi/{id}/delete', [DataProgramStudiController::class, 'destroy'])->name('dataprodi.delete');
    Route::post('/dataprodi/{id}', [DataProgramStudiController::class, 'updateByFakutlas'])->name('dataprodi.updateByFakutlas');

    Route::get('/dataprodi/{id}/session', [DataProgramStudiController::class, 'sessionProdi'])->name('dataprodi.session');
});

// ====================================
// data keuangan
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/datakeuangan', [DataKeuanganController::class, 'index'])->name('datakeuangan.index');
    Route::get('/datakeuangan/create', [DataKeuanganController::class, 'create'])->name('datakeuangan.create');
    Route::post('/datakeuangan/store', [DataKeuanganController::class, 'store'])->name('datakeuangan.store');
    Route::get('/datakeuangan/{id}/edit', [DataKeuanganController::class, 'edit'])->name('datakeuangan.edit');
    Route::put('/datakeuangan/{id}/update', [DataKeuanganController::class, 'update'])->name('datakeuangan.update');
    Route::get('/datakeuangan/{id}/delete', [DataKeuanganController::class, 'destroy'])->name('datakeuangan.delete');
});

// ====================================
// kriteria 2
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria2', [TabelC2Controller::class, 'index']);

    // kriteria 2 > bidang pendidikan
    Route::get('/kriteria2/bidang_pendidikan', [TabelC2Controller::class, 'bidang_pendidikan_index'])->name('bidang_pendidikan.index');
    Route::get('/kriteria2/bidang_pendidikan/create/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_create'])->name('bidang_pendidikan.create');
    Route::post('/kriteria2/bidang_pendidikan/create/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_store'])->name('bidang_pendidikan.store');
    Route::get('/kriteria2/bidang_pendidikan/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_edit'])->name('bidang_pendidikan.edit');
    Route::put('/kriteria2/bidang_pendidikan/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pendidikan_update'])->name('bidang_pendidikan.update');
    Route::get('/kriteria2/bidang_pendidikan/{id}/delete', [TabelC2Controller::class, 'bidang_pendidikan_destroy'])->name('bidang_pendidikan.delete');

    // kriteria 2 > bidang Penelitian
    Route::get('/kriteria2/bidang_penelitian', [TabelC2Controller::class, 'bidang_penelitian_index'])->name('bidang_penelitan.index');
    Route::get('/kriteria2/bidang_penelitian/create/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_create'])->name('bidang_penelitan.create');
    Route::post('/kriteria2/bidang_penelitian/create/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_store'])->name('bidang_penelitan.store');
    Route::get('/kriteria2/bidang_penelitian/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_edit'])->name('bidang_penelitan.edit');
    Route::put('/kriteria2/bidang_penelitian/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_penelitian_update'])->name('bidang_penelitan.update');
    Route::get('/kriteria2/bidang_penelitian/{id}/delete', [TabelC2Controller::class, 'bidang_penelitian_destroy'])->name('bidang_penelitan.delete');

    // kriteria 2 > bidang PkM
    Route::get('/kriteria2/bidang_pkm', [TabelC2Controller::class, 'bidang_pkm_index'])->name('bidang_pkm.index');
    Route::get('/kriteria2/bidang_pkm/create/{bidang}', [TabelC2Controller::class, 'bidang_pkm_create'])->name('bidang_pkm.create');
    Route::post('/kriteria2/bidang_pkm/create/{bidang}', [TabelC2Controller::class, 'bidang_pkm_store'])->name('bidang_pkm.store');
    Route::get('/kriteria2/bidang_pkm/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pkm_edit'])->name('bidang_pkm.edit');
    Route::put('/kriteria2/bidang_pkm/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pkm_update'])->name('bidang_pkm.update');
    Route::get('/kriteria2/bidang_pkm/{id}/delete', [TabelC2Controller::class, 'bidang_pkm_destroy'])->name('bidang_pkm.delete');

    // kriteria 2 > bidang Pengembangan Kelembagaan
    Route::get('/kriteria2/bidang_pengembangan_kelembagaan', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_index'])->name('bidang_pengembangan_kelembagaan.index');
    Route::get('/kriteria2/bidang_pengembangan_kelembagaan/create/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_create'])->name('bidang_pengembangan_kelembagaan.create');
    Route::post('/kriteria2/bidang_pengembangan_kelembagaan/create/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_store'])->name('bidang_pengembangan_kelembagaan.store');
    Route::get('/kriteria2/bidang_pengembangan_kelembagaan/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_edit'])->name('bidang_pengembangan_kelembagaan.edit');
    Route::put('/kriteria2/bidang_pengembangan_kelembagaan/{id}/edit/{bidang}', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_update'])->name('bidang_pengembangan_kelembagaan.update');
    Route::get('/kriteria2/bidang_pengembangan_kelembagaan/{id}/delete', [TabelC2Controller::class, 'bidang_pengembangan_kelembagaan_destroy'])->name('bidang_pengembangan_kelembagaan.delete');
});

// ====================================
// kriteria 3
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria3', [TabelC3Controller::class, 'index']);
    // Kriteria 3 > Tabel Mahasiswa Reguler
    Route::get('/kriteria3/mahasiswa_reguler', [TabelC3Controller::class, 'mahasiswa_reguler_index'])->name('mahasiswa_reguler.index');
    Route::get('/kriteria3/mahasiswa_reguler/create', [TabelC3Controller::class, 'mahasiswa_reguler_create'])->name('mahasiswa_reguler.create');
    Route::post('/kriteria3/mahasiswa_reguler/create', [TabelC3Controller::class, 'mahasiswa_reguler_store'])->name('mahasiswa_reguler.store');
    Route::get('/kriteria3/mahasiswa_reguler/{id}/edit', [TabelC3Controller::class, 'mahasiswa_reguler_edit'])->name('mahasiswa_reguler.edit');
    Route::put('/kriteria3/mahasiswa_reguler/{id}/edit', [TabelC3Controller::class, 'mahasiswa_reguler_update'])->name('mahasiswa_reguler.update');
    Route::get('/kriteria3/mahasiswa_reguler/{id}/delete', [TabelC3Controller::class, 'mahasiswa_reguler_destroy'])->name('mahasiswa_reguler.delete');

    // Kriteria 3 > Calon Mahasiswa dalam negeri
    Route::get('/kriteria3/mahasiswa_dalam_negeri', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_index'])->name('mahasiswa_dalam_negeri.index');
    Route::get('/kriteria3/mahasiswa_dalam_negeri/create', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_create'])->name('mahasiswa_dalam_negeri.create');
    Route::post('/kriteria3/mahasiswa_dalam_negeri/create', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_store'])->name('mahasiswa_dalam_negeri.store');
    Route::get('/kriteria3/mahasiswa_dalam_negeri/{id}/edit', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_edit'])->name('mahasiswa_dalam_negeri.edit');
    Route::put('/kriteria3/mahasiswa_dalam_negeri/{id}/edit', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_update'])->name('mahasiswa_dalam_negeri.update');
    Route::get('/kriteria3/mahasiswa_dalam_negeri/{id}/delete', [TabelC3Controller::class, 'mahasiswa_dalam_negeri_destroy'])->name('mahasiswa_dalam_negeri.delete');

    // Kriteria 3 > Calon Mahasiswa luar negeri
    Route::get('/kriteria3/mahasiswa_luar_negeri', [TabelC3Controller::class, 'mahasiswa_luar_negeri_index'])->name('mahasiswa_luar_negeri.index');
    Route::get('/kriteria3/mahasiswa_luar_negeri/create', [TabelC3Controller::class, 'mahasiswa_luar_negeri_create'])->name('mahasiswa_luar_negeri.create');
    Route::post('/kriteria3/mahasiswa_luar_negeri/create', [TabelC3Controller::class, 'mahasiswa_luar_negeri_store'])->name('mahasiswa_luar_negeri.store');
    Route::get('/kriteria3/mahasiswa_luar_negeri/{id}/edit', [TabelC3Controller::class, 'mahasiswa_luar_negeri_edit'])->name('mahasiswa_luar_negeri.edit');
    Route::put('/kriteria3/mahasiswa_luar_negeri/{id}/edit', [TabelC3Controller::class, 'mahasiswa_luar_negeri_update'])->name('mahasiswa_luar_negeri.update');
    Route::get('/kriteria3/mahasiswa_luar_negeri/{id}/delete', [TabelC3Controller::class, 'mahasiswa_luar_negeri_destroy'])->name('mahasiswa_luar_negeri.delete');

    // Kriteria 3 > Program Layanan Dan Pembinaan Minat, Bakat, Penalaran, Kesejahteraan, Dan Keprofesian Mahasiswa
    Route::get('/kriteria3/program_layanan', [TabelC3Controller::class, 'program_layanan_index'])->name('program_layanan.index');
    Route::get('/kriteria3/program_layanan/create', [TabelC3Controller::class, 'program_layanan_create'])->name('program_layanan.create');
    Route::post('/kriteria3/program_layanan/create', [TabelC3Controller::class, 'program_layanan_store'])->name('program_layanan.store');
    Route::get('/kriteria3/program_layanan/{id}/edit', [TabelC3Controller::class, 'program_layanan_edit'])->name('program_layanan.edit');
    Route::put('/kriteria3/program_layanan/{id}/edit', [TabelC3Controller::class, 'program_layanan_update'])->name('program_layanan.update');
    Route::get('/kriteria3/program_layanan/{id}/delete', [TabelC3Controller::class, 'program_layanan_destroy'])->name('program_layanan.delete');
});

// ====================================
// kriteria 4
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria4', [TabelC4Controller::class, 'index']);

    // Kriteria 4 > DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS
    Route::get('/kriteria4/dtps_keahlian_bidang_ps', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_index'])->name('dtps_ps.index');
    Route::get('/kriteria4/dtps_keahlian_bidang_ps/create', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_create'])->name('dtps_ps.create');
    Route::post('/kriteria4/dtps_keahlian_bidang_ps/create', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_store'])->name('dtps_ps.store');
    Route::get('/kriteria4/dtps_keahlian_bidang_ps/{id}/edit', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_edit'])->name('dtps_ps.edit');
    Route::put('/kriteria4/dtps_keahlian_bidang_ps/{id}/edit', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_update'])->name('dtps_ps.update');
    Route::get('/kriteria4/dtps_keahlian_bidang_ps/{id}/delete', [TabelC4Controller::class, 'dtps_keahlian_bidang_ps_destroy'])->name('dtps_ps.delete');


    // Kriteria 4 > DTPS yang Bidang Keahliannya di Luar Bidang PS
    Route::get('/kriteria4/dtps_luar_ps', [TabelC4Controller::class, 'dtps_luar_ps_index'])->name('dtps_luar_ps.index');
    Route::get('/kriteria4/dtps_luar_ps/create', [TabelC4Controller::class, 'dtps_luar_ps_create'])->name('dtps_luar_ps.create');
    Route::post('/kriteria4/dtps_luar_ps/create', [TabelC4Controller::class, 'dtps_luar_ps_store'])->name('dtps_luar_ps.store');
    Route::get('/kriteria4/dtps_luar_ps/{id}/edit', [TabelC4Controller::class, 'dtps_luar_ps_edit'])->name('dtps_luar_ps.edit');
    Route::put('/kriteria4/dtps_luar_ps/{id}/edit', [TabelC4Controller::class, 'dtps_luar_ps_update'])->name('dtps_luar_ps.update');
    Route::get('/kriteria4/dtps_luar_ps/{id}/delete', [TabelC4Controller::class, 'dtps_luar_ps_destroy'])->name('dtps_luar_ps.delete');

    // Kriteria 4 > Tabel Rasio DTPS terhadap Mahasiswa Reguler
    Route::get('/kriteria4/rasio_dtps_terhadap_mahasiswa_reguler/index', [TabelC4Controller::class, 'rasio_dtps_terhadap_mahasiswa_reguler_index']);

    // Kriteria 4 > Tabel Beban Kerja Dosen DTPS
    Route::get('/kriteria4/beban_kerja_dosen_dtps', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_index'])->name('beban_kerja_dosen_dtps.index');
    Route::get('/kriteria4/beban_kerja_dosen_dtps/create', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_create'])->name('beban_kerja_dosen_dtps.create');
    Route::post('/kriteria4/beban_kerja_dosen_dtps/create', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_store'])->name('beban_kerja_dosen_dtps.store');
    Route::get('/kriteria4/beban_kerja_dosen_dtps/{id}/edit', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_edit'])->name('beban_kerja_dosen_dtps.edit');
    Route::put('/kriteria4/beban_kerja_dosen_dtps/{id}/edit', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_update'])->name('beban_kerja_dosen_dtps.update');
    Route::get('/kriteria4/beban_kerja_dosen_dtps/{id}/delete', [TabelC4Controller::class, 'beban_kerja_dosen_dtps_destroy'])->name('beban_kerja_dosen_dtps.delete');

    // Kriteria 4 > Tabel Kegiatan Mengajar Dosen Tetap
    Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_index'])->name('kegiatan_mengajar_dosen_tetap.index');
    Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap/create', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_create'])->name('kegiatan_mengajar_dosen_tetap.create');
    Route::post('/kriteria4/kegiatan_mengajar_dosen_tetap/create', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_store'])->name('kegiatan_mengajar_dosen_tetap.store');
    Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap/{id}/edit', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_edit'])->name('kegiatan_mengajar_dosen_tetap.edit');
    Route::put('/kriteria4/kegiatan_mengajar_dosen_tetap/{id}/edit', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_update'])->name('kegiatan_mengajar_dosen_tetap.update');
    Route::get('/kriteria4/kegiatan_mengajar_dosen_tetap/{id}/delete', [TabelC4Controller::class, 'kegiatan_mengajar_dosen_tetap_destroy'])->name('kegiatan_mengajar_dosen_tetap.delete');

    // Kriteria 4 > Tabel Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi
    Route::get('/kriteria4/jumlah_bimbingan_ta', [TabelC4Controller::class, 'jumlah_bimbingan_ta_index'])->name('jumlah_bimbingan_ta.index');
    Route::get('/kriteria4/jumlah_bimbingan_ta/create', [TabelC4Controller::class, 'jumlah_bimbingan_ta_create'])->name('jumlah_bimbingan_ta.create');
    Route::post('/kriteria4/jumlah_bimbingan_ta/create', [TabelC4Controller::class, 'jumlah_bimbingan_ta_store'])->name('jumlah_bimbingan_ta.store');
    Route::get('/kriteria4/jumlah_bimbingan_ta/{id}/edit', [TabelC4Controller::class, 'jumlah_bimbingan_ta_edit'])->name('jumlah_bimbingan_ta.edit');
    Route::put('/kriteria4/jumlah_bimbingan_ta/{id}/edit', [TabelC4Controller::class, 'jumlah_bimbingan_ta_update'])->name('jumlah_bimbingan_ta.update');
    Route::get('/kriteria4/jumlah_bimbingan_ta/{id}/delete', [TabelC4Controller::class, 'jumlah_bimbingan_ta_destroy'])->name('jumlah_bimbingan_ta.delete');

    // Kriteria 4 > Tabel Prestasi DTPS
    Route::get('/kriteria4/prestasi_dtps', [TabelC4Controller::class, 'prestasi_dtps_index'])->name('prestasi_dtps.index');
    Route::get('/kriteria4/prestasi_dtps/create', [TabelC4Controller::class, 'prestasi_dtps_create'])->name('prestasi_dtps.create');
    Route::post('/kriteria4/prestasi_dtps/create', [TabelC4Controller::class, 'prestasi_dtps_store'])->name('prestasi_dtps.store');
    Route::get('/kriteria4/prestasi_dtps/{id}/edit', [TabelC4Controller::class, 'prestasi_dtps_edit'])->name('prestasi_dtps.edit');
    Route::put('/kriteria4/prestasi_dtps/{id}/edit', [TabelC4Controller::class, 'prestasi_dtps_update'])->name('prestasi_dtps.update');
    Route::get('/kriteria4/prestasi_dtps/{id}/delete', [TabelC4Controller::class, 'prestasi_dtps_destroy'])->name('prestasi_dtps.delete');

    // Kriteria 4 > Tabel Pengembangan Kompetensi DTPS
    Route::get('/kriteria4/pengembangan_kompetensi_dtps', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_index'])->name('pengembangan_kompetensi_dtps.index');
    Route::get('/kriteria4/pengembangan_kompetensi_dtps/create', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_create'])->name('pengembangan_kompetensi_dtps.create');;
    Route::post('/kriteria4/pengembangan_kompetensi_dtps/store', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_store'])->name('pengembangan_kompetensi_dtps.store');;
    Route::get('/kriteria4/pengembangan_kompetensi_dtps/{id}/edit', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_edit'])->name('pengembangan_kompetensi_dtps.edit');;
    Route::PUT('/kriteria4/pengembangan_kompetensi_dtps/{id}/update', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_update'])->name('pengembangan_kompetensi_dtps.update');;
    Route::get('/kriteria4/pengembangan_kompetensi_dtps/{id}/delete', [TabelC4Controller::class, 'pengembangan_kompetensi_dtps_destroy'])->name('pengembangan_kompetensi_dtps.destroy');;

    // Kriteria 4 > Tabel Profil Tendik
    Route::get('/kriteria4/profil_tendik', [TabelC4Controller::class, 'profil_tendik_index'])->name('profil_tendik.index');
    Route::get('/kriteria4/profil_tendik/create', [TabelC4Controller::class, 'profil_tendik_create'])->name('profil_tendik.create');
    Route::post('/kriteria4/profil_tendik/store', [TabelC4Controller::class, 'profil_tendik_store'])->name('profil_tendik.store');
    Route::get('/kriteria4/profil_tendik/{id}/edit', [TabelC4Controller::class, 'profil_tendik_edit'])->name('profil_tendik.edit');
    Route::put('/kriteria4/profil_tendik/{id}/update', [TabelC4Controller::class, 'profil_tendik_update'])->name('profil_tendik.update');
    Route::get('/kriteria4/profil_tendik/{id}/delete', [TabelC4Controller::class, 'profil_tendik_destroy'])->name('profil_tendik.destroy');

    // Kriteria 4 > Tabel Pengembangan Kompetensi dan Karier Tendik
    Route::get('/kriteria4/kompetensi_tendik', [TabelC4Controller::class, 'kompetensi_tendik_index'])->name('kompetensi_tendik.index');
    Route::get('/kriteria4/kompetensi_tendik/create', [TabelC4Controller::class, 'kompetensi_tendik_create'])->name('kompetensi_tendik.create');
    Route::post('/kriteria4/kompetensi_tendik/store', [TabelC4Controller::class, 'kompetensi_tendik_store'])->name('kompetensi_tendik.store');
    Route::get('/kriteria4/kompetensi_tendik/{id}/edit', [TabelC4Controller::class, 'kompetensi_tendik_edit'])->name('kompetensi_tendik.edit');
    Route::put('/kriteria4/kompetensi_tendik/{id}/update', [TabelC4Controller::class, 'kompetensi_tendik_update'])->name('kompetensi_tendik.update');
    Route::get('/kriteria4/kompetensi_tendik/{id}/delete', [TabelC4Controller::class, 'kompetensi_tendik_destroy'])->name('kompetensi_tendik.destroy');
});

// ====================================
// kriteria 5
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria5', [TabelC5Controller::class, 'index']);
    // Kriteria 5 > Tabel Pemerolehan Dana
    Route::get('/kriteria5/pemerolehan_dana', [TabelC5Controller::class, 'pemerolehan_dana_index']);
    Route::get('/kriteria5/pemerolehan_dana/create', [TabelC5Controller::class, 'pemerolehan_dana_create']);
    Route::get('/kriteria5/pemerolehan_dana/edit', [TabelC5Controller::class, 'pemerolehan_dana_edit']);
    // Kriteria 5 > Tabel Penggunaan Dana
    Route::get('/kriteria5/penggunaan_dana', [TabelC5Controller::class, 'penggunaan_dana_index']);
    Route::get('/kriteria5/penggunaan_dana/create', [TabelC5Controller::class, 'penggunaan_dana_create']);
    Route::get('/kriteria5/penggunaan_dana/edit', [TabelC5Controller::class, 'penggunaan_dana_edit']);
    // Kriteria 5 > Tabel Dana Penelitian
    Route::get('/kriteria5/dana_penelitian', [TabelC5Controller::class, 'dana_penelitian_index']);
    Route::get('/kriteria5/dana_penelitian/create', [TabelC5Controller::class, 'dana_penelitian_create']);
    Route::get('/kriteria5/dana_penelitian/edit', [TabelC5Controller::class, 'dana_penelitian_edit']);
    // Kriteria 5 > Tabel Dana PKM
    Route::get('/kriteria5/dana_pkm', [TabelC5Controller::class, 'dana_pkm_index']);
    Route::get('/kriteria5/dana_pkm/create', [TabelC5Controller::class, 'dana_pkm_create']);
    Route::get('/kriteria5/dana_pkm/edit', [TabelC5Controller::class, 'dana_pkm_edit']);
    
    // Kriteria 5 > Tabel Data Prasarana Pendidikan
    Route::get('/kriteria5/prasarana_pendidikan', [TabelC5Controller::class, 'prasarana_pendidikan_index'])->name('prasarana_pendidikan.index');
    Route::get('/kriteria5/prasarana_pendidikan/create', [TabelC5Controller::class, 'prasarana_pendidikan_create'])->name('prasarana_pendidikan.create');
    Route::post('/kriteria5/prasarana_pendidikan/store', [TabelC5Controller::class, 'prasarana_pendidikan_store'])->name('prasarana_pendidikan.store');
    Route::get('/kriteria5/prasarana_pendidikan/{id}/edit', [TabelC5Controller::class, 'prasarana_pendidikan_edit'])->name('prasarana_pendidikan.edit');
    Route::put('/kriteria5/prasarana_pendidikan/{id}/update', [TabelC5Controller::class, 'prasarana_pendidikan_update'])->name('prasarana_pendidikan.update');
    Route::get('/kriteria5/prasarana_pendidikan/{id}/delete', [TabelC5Controller::class, 'prasarana_pendidikan_destroy'])->name('prasarana_pendidikan.destroy');
    
    // Kriteria 5 > Tabel Data Sarana Pendidikan
    Route::get('/kriteria5/sarana_pendidikan', [TabelC5Controller::class, 'sarana_pendidikan_index'])->name('sarana_pendidikan.index');
    Route::get('/kriteria5/sarana_pendidikan/create', [TabelC5Controller::class, 'sarana_pendidikan_create'])->name('sarana_pendidikan.create');
    Route::post('/kriteria5/sarana_pendidikan/store', [TabelC5Controller::class, 'sarana_pendidikan_store'])->name('sarana_pendidikan.store');
    Route::get('/kriteria5/sarana_pendidikan/{id}/edit', [TabelC5Controller::class, 'sarana_pendidikan_edit'])->name('sarana_pendidikan.edit');
    Route::put('/kriteria5/sarana_pendidikan/{id}/update', [TabelC5Controller::class, 'sarana_pendidikan_update'])->name('sarana_pendidikan.update');
    Route::get('/kriteria5/sarana_pendidikan/{id}/delete', [TabelC5Controller::class, 'sarana_pendidikan_destroy'])->name('sarana_pendidikan.destroy');
});
// ====================================
// kriteria 6
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria6', [TabelC6Controller::class, 'index']);
});
// ====================================
// kriteria 7
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria7', [TabelC7Controller::class, 'index']);
    Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_index']);
    Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian/create', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_create']);
    Route::get('/kriteria7/pelibatan_mahasiswa_dalam_penelitian/edit', [TabelC7Controller::class, 'pelibatan_mahasiswa_dalam_penelitian_edit']);
});


// ====================================
// kriteria 8
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria8', [TabelC8Controller::class, 'index']);
    Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_index']);
    Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm/create', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_create']);
    Route::get('/kriteria8/pelibatan_mahasiswa_dalam_pkm/edit', [TabelC8Controller::class, 'pelibatan_mahasiswa_dalam_pkm_edit']);
});
// ====================================
// kriteria 9
// ====================================
Route::middleware('auth')->group(function () {
    Route::get('/kriteria9', [TabelC9Controller::class, 'index']);
});