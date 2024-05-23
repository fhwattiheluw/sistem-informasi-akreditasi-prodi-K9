<?php

namespace App\Http\Controllers;

use App\Models\tabelC6;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TabelC6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c6.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_index()
    {
        //
        $data = tabelC6::all();
        return view('kriteria.c6.mata_kuliah_cpl_dan_perangkat_pembelajaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_create()
    {
        //
        return view('kriteria.c6.mata_kuliah_cpl_dan_perangkat_pembelajaran.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_store(Request $request)
    {
        //
        $data = new tabelC6;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_mata_kuliah_cpl_dan_perangkat_pembelajaran = $request->nama_mata_kuliah_cPL_dan_perangkat_pembelajaran;
        $data->save();
        return redirect()->route('mata_kuliah_cpl_dan_perangkat_pembelajaran.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_edit($id)
    {
        //
        $data = tabelC6::find($id);
        return view('kriteria.c6.mata_kuliah_cpl_dan_perangkat_pembelajaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_update(Request $request, $id)
    {
        //
        $data = tabelC6::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_mata_kuliah_cpl_dan_perangkat_pembelajaran = $request->nama_mata_kuliah_cPL_dan_perangkat_pembelajaran;
        $data->save();
        return redirect()->route('mata_kuliah_cpl_dan_perangkat_pembelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mata_kuliah_cpl_dan_perangkat_pembelajaran_destroy($id)
    {
        //
        $data = tabelC6::find($id);
        $data->delete();
        return redirect()->route('mata_kuliah_cpl_dan_perangkat_pembelajaran.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_index()
    {
        //
        $data = tabelC6::all();
        return view('kriteria.c6.integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_create()
    {
        //
        return view('kriteria.c6.integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_store(Request $request)
    {
        //
        $data = new tabelC6;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran = $request->nama_integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran;
        $data->save();
        return redirect()->route('integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.index');
    }

    /**
     * Show the specified resource.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_edit($id)
    {
        //
        $data = tabelC6::find($id);
        return view('kriteria.c6.integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_update(Request $request, $id)
    {
        //
        $data = tabelC6::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran = $request->nama_integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran;
        $data->save();
        return redirect()->route('integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran_destroy($id)
    {
        //
        $data = tabelC6::find($id);
        $data->delete();
        return redirect()->route('integrasi_hasil_penelitian_dan_pkM_dalam_proses_pembelajaran.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_index()
    {
        //
        // $data = jumlahMhsBimbinganDanFrekuensiPertemuan::all();
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_create()
    {
        //
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_store(Request $request)
    {
        //
        $data = new jumlahMhsBimbinganDanFrekuensiPertemuan;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan = $request->jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_edit($id)
    {
        //
        $data = jumlahMhsBimbinganDanFrekuensiPertemuan::find($id);
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_update(Request $request, $id)
    {
        //
        $data = jumlahMhsBimbinganDanFrekuensiPertemuan::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan = $request->jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan_destroy($id)
    {
        //
        $data = jumlahMhsBimbinganDanFrekuensiPertemuan::find($id);
        $data->delete();
        return redirect()->route('jumlah_mahasiswa_bimbingan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_index()
    {
        //
        // $data = jumlahMhsBimbinganMagangKependidikanDanFrekuensiPertemuan::all();
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_create()
    {
        //
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_store(Request $request)
    {
        //
        $data = new jumlahMhsBimbinganMagangKependidikanDanFrekuensiPertemuan;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan = $request->jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_edit($id)
    {
        //
        $data = jumlahMhsBimbinganMagangKependidikanDanFrekuensiPertemuan::find($id);
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_update(Request $request, $id)
    {
        //
        $data = jumlahMhsBimbinganMagangKependidikanDanFrekuensiPertemuan::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan = $request->jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan_destroy($id)
    {
        //
        $data = jumlahMhsBimbinganMagangKependidikanDanFrekuensiPertemuan::find($id);
        $data->delete();
        return redirect()->route('jumlah_mahasiswa_bimbingan_magang_kependidikan_dan_frekuensi_pertemuan.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_index()
    {
        //
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_ta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_create()
    {
        //
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_ta.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_store(Request $request)
    {
        //
        $data = new jumlahMhsBimbinganTa;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_ta = $request->jumlah_mahasiswa_bimbingan_ta;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_ta.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_edit($id)
    {
        //
        $data = jumlahMhsBimbinganTa::find($id);
        return view('kriteria.c6.jumlah_mahasiswa_bimbingan_ta.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_update(Request $request, $id)
    {
        //
        $data = jumlahMhsBimbinganTa::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->jumlah_mahasiswa_bimbingan_ta = $request->jumlah_mahasiswa_bimbingan_ta;
        $data->save();
        return redirect()->route('jumlah_mahasiswa_bimbingan_ta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function jumlah_mahasiswa_bimbingan_ta_destroy($id)
    {
        //
        $data = jumlahMhsBimbinganTa::find($id);
        $data->delete();
        return redirect()->route('jumlah_mahasiswa_bimbingan_ta.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_index()
    {
        //
        // $data = kegiatanAkademikDiLuarPerkuliahan::all();
        return view('kriteria.c6.kegiatan_akademik_di_luar_perkuliahan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_create()
    {
        //
        return view('kriteria.c6.kegiatan_akademik_di_luar_perkuliahan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_store(Request $request)
    {
        //
        $data = new kegiatanAkademikDiLuarPerkuliahan;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->kegiatan_akademik_di_luar_perkuliahan = $request->kegiatan_akademik_di_luar_perkuliahan;
        $data->save();
        return redirect()->route('kegiatan_akademik_di_luar_perkuliahan.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_edit($id)
    {
        //
        $data = kegiatanAkademikDiLuarPerkuliahan::find($id);
        return view('kriteria.c6.ke aktivit_akademik_di_luar_perkuliahan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_update(Request $request, $id)
    {
        //
        $data = kegiatanAkademikDiLuarPerkuliahan::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->kegiatan_akademik_di_luar_perkuliahan = $request->kegiatan_akademik_di_luar_perkuliahan;
        $data->save();
        return redirect()->route('ke aktivit_akademik_di_luar_perkuliahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kegiatan_akademik_di_luar_perkuliahan_destroy($id)
    {
        //
        $data = kegiatanAkademikDiLuarPerkuliahan::find($id);
        $data->delete();
        return redirect()->route('ke activities_akademik_di_luar_perkuliahan.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_index()
    {
        //
        // $data = dosenTamuDanTenagaAhli::all();
        return view('kriteria.c6.dosen_tamu_dan_tenaga_ahli.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_create()
    {
        //
        return view('kriteria.c6.dosen_tamu_dan_tenaga_ahli.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_store(Request $request)
    {
        //
        $data = new dosenTamuDanTenagaAhli;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_dosen_tamu_dan_tenaga_ahli = $request->nama_dosen_tamu_dan_tenaga_ahli;
        $data->save();
        return redirect()->route('dosen_tamu_dan_tenaga_ahli.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_edit($id)
    {
        //
        $data = dosenTamuDanTenagaAhli::find($id);
        return view('kriteria.c6.dosen_tamu_dan_tenaga_ahli.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_update(Request $request, $id)
    {
        //
        $data = dosenTamuDanTenagaAhli::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->nama_dosen_tamu_dan_tenaga_ahli = $request->nama_dosen_tamu_dan_tenaga_ahli;
        $data->save();
        return redirect()->route('dosen_tamu_dan_tenaga_ahli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dosen_tamu_dan_tenaga_ahli_destroy($id)
    {
        //
        $data = dosenTamuDanTenagaAhli::find($id);
        $data->delete();
        return redirect()->route('dosen_tamu_dan_tenaga_ahli.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_index()
    {
        //
        // $data = kepuasanMahasiswa::all();
        return view('kriteria.c6.kepuasan_mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_create()
    {
        //
        return view('kriteria.c6.kepuasan_mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_store(Request $request)
    {
        //
        $data = new kepuasanMahasiswa;
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->kepuasan_mahasiswa = $request->kepuasan_mahasiswa;
        $data->save();
        return redirect()->route('kepuasan_mahasiswa.index');
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_edit($id)
    {
        //
        $data = kepuasanMahasiswa::find($id);
        return view('kriteria.c6.kepuasan_mahasiswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_update(Request $request, $id)
    {
        //
        $data = kepuasanMahasiswa::find($id);
        $data->id_kriteria6 = $request->id_kriteria6;
        $data->kepuasan_mahasiswa = $request->kepuasan_mahasiswa;
        $data->save();
        return redirect()->route('kepuasan_mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kepuasan_mahasiswa_destroy($id)
    {
        //
        $data = kepuasanMahasiswa::find($id);
        $data->delete();
        return redirect()->route('kepuasan_mahasiswa.index');
    }

    
    
}
    

