<?php

namespace App\Http\Controllers;

use App\Models\tabelC4;
use App\Models\TabelK4DtpsKeahlianPS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TabelC4Controller extends Controller
{
    public function index()
    {
        //
        return view('kriteria.c4.index');
    }

    // Tabel 4.1.2.2 DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS
    public function dtps_keahlian_bidang_ps_index()
    {
        $items = TabelK4DtpsKeahlianPS::all();
        return view('kriteria.c4.dtps_keahlian_bidang_ps.index', ['items' => $items]);
    }
    public function dtps_keahlian_bidang_ps_create()
    {
        //
        return view('kriteria.c4.dtps_keahlian_bidang_ps.form');

    }
    public function dtps_keahlian_bidang_ps_store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nidn_nidk' => 'required',
            'tanggal_lahir' => 'required|date',
            'sertifikat_pendidik' => 'required',
            'jabatan_fungsional' => 'required',
            'gelar_akademik' => 'required',
            'pendidikan' => 'required',
            'bidang_keahlian' => 'required', 
        ]);

        TabelK4DtpsKeahlianPS::create([
            'nama' => $request->nama,
            'nidn_nidk' => $request->nidn_nidk,
            'tanggal_lahir' => $request->tanggal_lahir,
            'sertifikat_pendidik' => $request->sertifikat_pendidik,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            'gelar_akademik' => $request->gelar_akademik,
            'pendidikan' => $request->pendidikan,
            'bidang_keahlian' => $request->bidang_keahlian, 
        ]);

        return redirect()->route('dtps_ps.index')->with('success', 'Data K4 DTPS Sesuai Keahlian PS CREATED successfully');
    }

    public function dtps_keahlian_bidang_ps_show(tabelC4 $tabelC4)
    {
        //
    }
    public function dtps_keahlian_bidang_ps_edit($id)
    {
        $item = TabelK4DtpsKeahlianPS::findOrFail($id);
        return view('kriteria.c4.dtps_keahlian_bidang_ps.form', ['item' => $item]);
    }

    public function dtps_keahlian_bidang_ps_update(Request $request, $id)
    {
        $idx =Crypt::decryptString($id);
        $data = TabelK4DtpsKeahlianPS::findOrFail($idx);
        $request->validate([
            'nama' => 'required',
            'nidn_nidk' => 'required',
            'tanggal_lahir' => 'required|date',
            'sertifikat_pendidik' => 'required',
            'jabatan_fungsional' => 'required',
            'gelar_akademik' => 'required',
            'pendidikan' => 'required',
            'bidang_keahlian' => 'required', 
        ]);

        $data->update([
            'nama' => $request->nama,
            'nidn_nidk' => $request->nidn_nidk,
            'tanggal_lahir' => $request->tanggal_lahir,
            'sertifikat_pendidik' => $request->sertifikat_pendidik,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            'gelar_akademik' => $request->gelar_akademik,
            'pendidikan' => $request->pendidikan,
            'bidang_keahlian' => $request->bidang_keahlian, 
        ]);

        return redirect()->route('dtps_ps.index')->with('success', 'Data K4 DTPS Sesuai Keahlian PS Updated successfully');
    }
    public function dtps_keahlian_bidang_ps_destroy($id)
    {
        TabelK4DtpsKeahlianPS::destroy($id);
        return redirect()->route('dtps_ps.index')->with('success', 'Data K4 DTPS Sesuai Keahlian PS Deleted successfully');
    }

    //Tabel 4.1.2.3 DTPS yang Bidang Keahliannya di Luar Bidang PS
    public function dtps_luar_ps_index()
    {
        //
        return view('kriteria.c4.dtps_luar_ps.index');
    }
    public function dtps_luar_ps_create()
    {
        //
        return view('kriteria.c4.dtps_luar_ps.form');
    }
    public function dtps_luar_ps_store(Request $request)
    {
        //
    }
    public function dtps_luar_ps_show(tabelC4 $tabelC4)
    {
        //
    }
    public function dtps_luar_ps_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.dtps_luar_ps.form');

    }
    public function dtps_luar_ps_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function dtps_luar_ps_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.4 Rasio DTPS terhadap Mahasiswa Reguler
    public function rasio_dtps_terhadap_mahasiswa_reguler_index()
    {
        //
        return view('kriteria.c4.rasio_dtps_terhadap_mahasiswa_reguler.index');
    }

    // Tabel 4.1.2.5 Beban Kerja Dosen DTPS
    public function beban_kerja_dosen_dtps_index()
    {
        //
        return view('kriteria.c4.beban_kerja_dosen_dtps.index');
    }
    public function beban_kerja_dosen_dtps_create()
    {
        //
        return view('kriteria.c4.beban_kerja_dosen_dtps.form');
    }
    public function beban_kerja_dosen_dtps_store(Request $request)
    {
        //
    }
    public function beban_kerja_dosen_dtps_show(tabelC4 $tabelC4)
    {
        //
    }
    public function beban_kerja_dosen_dtps_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.beban_kerja_dosen_dtps.form');
    }
    public function beban_kerja_dosen_dtps_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function beban_kerja_dosen_dtps_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.6 Kegiatan Mengajar Dosen Tetap - Semester Gasal & Semester Genap
    public function kegiatan_mengajar_dosen_tetap_index()
    {
        //
        return view('kriteria.c4.kegiatan_mengajar_dosen_tetap.index');
    }
    public function kegiatan_mengajar_dosen_tetap_create()
    {
        //
        return view('kriteria.c4.kegiatan_mengajar_dosen_tetap.form');
    }
    public function kegiatan_mengajar_dosen_tetap_store(Request $request)
    {
        //
    }
    public function kegiatan_mengajar_dosen_tetap_show(tabelC4 $tabelC4)
    {
        //
    }
    public function kegiatan_mengajar_dosen_tetap_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.kegiatan_mengajar_dosen_tetap.form');
    }
    public function kegiatan_mengajar_dosen_tetap_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function kegiatan_mengajar_dosen_tetap_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.7 Jumlah Bimbingan Tugas Akhir atau Skripsi, Tesis, dan Disertasi
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_index()
    {
        //
        return view('kriteria.c4.jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi.index');
    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_create()
    {
        //
        return view('kriteria.c4.jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi.form');

    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_store(Request $request)
    {
        //
    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_show(tabelC4 $tabelC4)
    {
        //
    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi.form');

    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function jumlah_bimbingan_tugas_akhir_skripsi_tesis_disertasi_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.8 Prestasi DTPS
    public function prestasi_dtps_index()
    {
        //
        return view('kriteria.c4.prestasi_dtps.index');
    }
    public function prestasi_dtps_create()
    {
        //
        return view('kriteria.c4.prestasi_dtps.form');
    }
    public function prestasi_dtps_store(Request $request)
    {
        //
    }
    public function prestasi_dtps_show(tabelC4 $tabelC4)
    {
        //
    }
    public function prestasi_dtps_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.prestasi_dtps.form');
    }
    public function prestasi_dtps_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function prestasi_dtps_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.9 Pengembangan Kompetensi DTPS
    public function pengembangan_kompetensi_dtps_index()
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_dtps.index');
    }
    public function pengembangan_kompetensi_dtps_create()
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_dtps.form');
    }
    public function pengembangan_kompetensi_dtps_store(Request $equest)
    {
        //
    }
    public function pengembangan_kompetensi_dtps_show(tabelC4 $tabelC4)
    {
        //
    }
    public function pengembangan_kompetensi_dtps_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_dtps.form');
    }
    public function pengembangan_kompetensi_dtps_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function pengembangan_kompetensi_dtps_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.2.2.2 Profil Tendik
    public function profil_tendik_index()
    {
        //
        return view('kriteria.c4.profil_tendik.index');
    }
    public function profil_tendik_create()
    {
        //
        return view('kriteria.c4.profil_tendik.form');

    }
    public function profil_tendik_store(Request $equest)
    {
        //
    }
    public function profil_tendik_show(tabelC4 $tabelC4)
    {
        //
    }
    public function profil_tendik_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.profil_tendik.form');
    }
    public function profil_tendik_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function profil_tendik_destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.2.2.3 Pengembangan Kompetensi dan Karier Tendik
    public function pengembangan_kompetensi_karier_tendik_index()
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_karier_tendik.index');
    }
    public function pengembangan_kompetensi_karier_tendik_create()
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_karier_tendik.form');

    }
    public function pengembangan_kompetensi_karier_tendik_store(Request $equest)
    {
        //
    }
    public function pengembangan_kompetensi_karier_tendik_show(tabelC4 $tabelC4)
    {
        //
    }
    public function pengembangan_kompetensi_karier_tendik_edit(tabelC4 $tabelC4)
    {
        //
        return view('kriteria.c4.pengembangan_kompetensi_karier_tendik.form');
        
    }
    public function pengembangan_kompetensi_karier_tendik_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function pengembangan_kompetensi_karier_tendik_destroy(tabelC4 $tabelC4)
    {
        //
    }


}
