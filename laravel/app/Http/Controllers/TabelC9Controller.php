<?php

namespace App\Http\Controllers;

use App\Models\tabelC9;
use Illuminate\Http\Request;

class TabelC9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c9.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_index()
    {
        //
        // $items = tabelC9::all();
        return view('kriteria.c9.ipk_lulusan.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_create()
    {
        //
        return view('kriteria.c9.ipk_lulusan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_store(Request $request)
    {
        //
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('ipk_lulusan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_edit(tabelC9 $tabelC9)
    {
        //
        return view('kriteria.c9.ipk_lulusan.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_update(Request $request, tabelC9 $tabelC9)
    {
        //
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('ipk_lulusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function ipk_lulusan_destroy(tabelC9 $tabelC9)
    {
        //
        $tabelC9->delete();
        return redirect()->route('ipk_lulusan.index');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_index()
    {
        $items = tabelC9::all();
        return view('kriteria.c9.prestasi_mahasiswa.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_create()
    {
        return view('kriteria.c9.prestasi_mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('prestasi_mahasiswa.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.prestasi_mahasiswa.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('prestasi_mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function prestasi_mahasiswa_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('prestasi_mahasiswa.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_index()
    {
        $items = tabelC9::all();
        return view('kriteria.c9.masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_create()
    {
        return view('kriteria.c9.masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('masa_studi_kelulusan_tepat_waktu_dan_keberhasilan_studi.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_index()
    {
        // $items = tabelC9::where('kriteria', 'Tracer Study Waktu Tunggu Mendapatkan Pekerjaan Pertama')->get();
        return view('kriteria.c9.tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_create()
    {
        return view('kriteria.c9.tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('tracer_study_waktu_tunggu_mendapatkan_pekerjaan_pertama.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_index()
    {
        // $items = tabelC9::where('kriteria', 'Tingkat Relevansi Pekerjaan')->get();
        return view('kriteria.c9.tingkat_relevansi_pekerjaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_create()
    {
        return view('kriteria.c9.tingkat_relevansi_pekerjaan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('tingkat_relevansi_pekerjaan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.tingkat_relevansi_pekerjaan.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('tingkat_relevansi_pekerjaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_relevansi_pekerjaan_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('tingkat_relevansi_pekerjaan.index');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_index()
    {
        // $items = tabelC9::where('kriteria', 'Tingkat Kepuasan Pengguna Lulusan')->get();
        return view('kriteria.c9.tingkat_kepuasan_pengguna_lulusan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_create()
    {
        return view('kriteria.c9.tingkat_kepuasan_pengguna_lulusan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('tingkat_kepuasan_pengguna_lulusan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.tingkat_kepuasan_pengguna_lulusan.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('tingkat_kepuasan_pengguna_lulusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function tingkat_kepuasan_pengguna_lulusan_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('tingkat_kepuasan_pengguna_lulusan.index');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_index()
    {
        
        return view('kriteria.c9.publikasi_dtps_dan_mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_create()
    {
        return view('kriteria.c9.publikasi_dtps_dan_mahasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('publikasi_dtps_dan_mahasiswa.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.publikasi_dtps_dan_mahasiswa.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('publikasi_dtps_dan_mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function publikasi_dtps_dan_mahasiswa_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('publikasi_dtps_dan_mahasiswa.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_index()
    {
        
        return view('kriteria.c9.karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_create()
    {
        return view('kriteria.c9.karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('karya_ilmiah_dtps_dan_mahasiswa_yang_disitasi.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_index()
    {
        
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_create()
    {
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_diadopsi_oleh_masyarakat.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_index()
    {
        
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_create()
    {
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_store(Request $request)
    {
        $data = $request->all();
        tabelC9::create($data);
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_edit(tabelC9 $tabelC9)
    {
        return view('kriteria.c9.produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.form', ['item' => $tabelC9]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_update(Request $request, tabelC9 $tabelC9)
    {
        $data = $request->all();
        $tabelC9->update($data);
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten_destroy(tabelC9 $tabelC9)
    {
        $tabelC9->delete();
        return redirect()->route('produk_atau_jasa_dtps_dan_mahasiswa_yang_berhki_atau_paten.index');
    }

}
