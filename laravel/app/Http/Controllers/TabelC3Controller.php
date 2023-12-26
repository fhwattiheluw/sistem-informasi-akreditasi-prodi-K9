<?php

namespace App\Http\Controllers;

use App\Models\tabelC3;
use Illuminate\Http\Request;

class TabelC3Controller extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    return view('kriteria.c3.index');
  }

  public function create()
  {
    //
  }
  public function store(Request $request)
  {
    //
  }
  public function show(tabelC3 $tabelC3)
  {
    //
  }
  public function edit(tabelC3 $tabelC3)
  {
    //
  }

  public function update(Request $request, tabelC3 $tabelC3)
  {
    //
  }
  public function destroy(tabelC3 $tabelC3)
  {
    //
  }

  // ===========================
  // Tabel Mahasiswa Reguler
  // ===========================
  public function mahasiswa_reguler_index()
  {
    //
    return view('kriteria.c3.mahasiswa_reguler.index');
  }

  public function mahasiswa_reguler_create()
  {
    //
    return view('kriteria.c3.mahasiswa_reguler.form');
  }
  public function mahasiswa_reguler_store(Request $request)
  {
    //
  }
  public function mahasiswa_reguler_show(tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_reguler_edit(tabelC3 $tabelC3)
  {
    //
    return view('kriteria.c3.mahasiswa_reguler.form');
  }

  public function mahasiswa_reguler_update(Request $request, tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_reguler_destroy(tabelC3 $tabelC3)
  {
    //
  }

  // ===============================
  // Calon mahasiswa dalam negeri
  // ===============================
  public function mahasiswa_dalam_negeri_index()
  {
    //
    return view('kriteria.c3.calon_mahasiswa_dalam_negeri.index');
  }

  public function mahasiswa_dalam_negeri_create()
  {
    //
    return view('kriteria.c3.calon_mahasiswa_dalam_negeri.form');
  }
  public function mahasiswa_dalam_negeri_store(Request $request)
  {
    //
  }
  public function mahasiswa_dalam_negeri_show(tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_dalam_negeri_edit(tabelC3 $tabelC3)
  {
    //
    return view('kriteria.c3.calon_mahasiswa_dalam_negeri.form');
  }

  public function mahasiswa_dalam_negeri_update(Request $request, tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_dalam_negeri_destroy(tabelC3 $tabelC3)
  {
    //
  }

  // ===============================
  // Calon mahasiswa luar negeri
  // ===============================
  public function mahasiswa_luar_negeri_index()
  {
    //
    return view('kriteria.c3.calon_mahasiswa_luar_negeri.index');
  }

  public function mahasiswa_luar_negeri_create()
  {
    //
    return view('kriteria.c3.calon_mahasiswa_luar_negeri.form');
  }
  public function mahasiswa_luar_negeri_store(Request $request)
  {
    //
  }
  public function mahasiswa_luar_negeri_show(tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_luar_negeri_edit(tabelC3 $tabelC3)
  {
    //
    return view('kriteria.c3.calon_mahasiswa_luar_negeri.form');
  }

  public function mahasiswa_luar_negeri_update(Request $request, tabelC3 $tabelC3)
  {
    //
  }
  public function mahasiswa_luar_negeri_destroy(tabelC3 $tabelC3)
  {
    //
  }

  // ===============================
  // Program Layanan Dan Pembinaan Minat, Bakat, Penalaran, Kesejahteraan, Dan Keprofesian Mahasiswa
  // ===============================
  public function program_layanan_index()
  {
    //
    return view('kriteria.c3.program_layanan.index');
  }
  
  public function program_layanan_create()
  {
    //
    return view('kriteria.c3.program_layanan.form');
  }
  public function program_layanan_store(Request $request)
  {
    //
  }
  public function program_layanan_show(tabelC3 $tabelC3)
  {
    //
  }
  public function program_layanan_edit(tabelC3 $tabelC3)
  {
    //
    return view('kriteria.c3.program_layanan.form');
  }

  public function program_layanan_update(Request $request, tabelC3 $tabelC3)
  {
    //
  }
  public function program_layanan_destroy(tabelC3 $tabelC3)
  {
    //
  }


}
