<?php

namespace App\Http\Controllers;

use App\Models\tabelC5;
use Illuminate\Http\Request;

class TabelC5Controller extends Controller
{

  public function index()
  {
    //
    return view('kriteria.c5.index');
  }

  // // Kriteria 5 > Tabel Pemerolehan Dana

  public function pemerolehan_dana_index()
  {
    //
    return view('kriteria.c5.pemerolehan_dana.index');
  }
  public function pemerolehan_dana_create()
  {
    //
    return view('kriteria.c5.pemerolehan_dana.form');
  }

  public function pemerolehan_dana_store(Request $request)
  {
    //
  }

  public function pemerolehan_dana_show(tabelC5 $tabelC5)
  {
    //
  }

  public function pemerolehan_dana_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.pemerolehan_dana.form');
  }

  public function pemerolehan_dana_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function pemerolehan_dana_destroy(tabelC5 $tabelC5)
  {
    //
  }

  // // Kriteria 5 > Tabel Penggunaan Dana

  public function penggunaan_dana_index()
  {
    //
    return view('kriteria.c5.penggunaan_dana.index');
  }
  public function penggunaan_dana_create()
  {
    //
    return view('kriteria.c5.penggunaan_dana.form');
  }

  public function penggunaan_dana_store(Request $request)
  {
    //
  }

  public function penggunaan_dana_show(tabelC5 $tabelC5)
  {
    //
  }

  public function penggunaan_dana_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.penggunaan_dana.form');
  }

  public function penggunaan_dana_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function penggunaan_dana_destroy(tabelC5 $tabelC5)
  {
    //
  }

  // Kriteria 5 > Tabel Dana Penelitian

  public function dana_penelitian_index()
  {
    //
    return view('kriteria.c5.dana_penelitian.index');
  }
  public function dana_penelitian_create()
  {
    //
    return view('kriteria.c5.dana_penelitian.form');
  }

  public function dana_penelitian_store(Request $request)
  {
    //
  }

  public function dana_penelitian_show(tabelC5 $tabelC5)
  {
    //
  }

  public function dana_penelitian_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.dana_penelitian.form');
  }

  public function dana_penelitian_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function dana_penelitian_destroy(tabelC5 $tabelC5)
  {
    //
  }

  // Kriteria 5 > Tabel Dana PKM

  public function dana_pkm_index()
  {
    //
    return view('kriteria.c5.dana_pkm.index');
  }
  public function dana_pkm_create()
  {
    //
    return view('kriteria.c5.dana_pkm.form');
  }

  public function dana_pkm_store(Request $request)
  {
    //
  }

  public function dana_pkm_show(tabelC5 $tabelC5)
  {
    //
  }

  public function dana_pkm_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.dana_pkm.form');
  }

  public function dana_pkm_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function dana_pkm_destroy(tabelC5 $tabelC5)
  {
    //
  }

  // Kriteria 5 > Tabel Data Prasarana Pendidikan

  public function prasarana_pendidikan_index()
  {
    //
    return view('kriteria.c5.prasarana_pendidikan.index');
  }
  public function prasarana_pendidikan_create()
  {
    //
    return view('kriteria.c5.prasarana_pendidikan.form');
  }

  public function prasarana_pendidikan_store(Request $request)
  {
    //
  }

  public function prasarana_pendidikan_show(tabelC5 $tabelC5)
  {
    //
  }

  public function prasarana_pendidikan_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.prasarana_pendidikan.form');
  }

  public function prasarana_pendidikan_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function prasarana_pendidikan_destroy(tabelC5 $tabelC5)
  {
    //
  }

  // Kriteria 5 > Tabel Data Sarana Pendidikan

  public function sarana_pendidikan_index()
  {
    //
    return view('kriteria.c5.sarana_pendidikan.index');
  }
  public function sarana_pendidikan_create()
  {
    //
    return view('kriteria.c5.sarana_pendidikan.form');
  }

  public function sarana_pendidikan_store(Request $request)
  {
    //
  }

  public function sarana_pendidikan_show(tabelC5 $tabelC5)
  {
    //
  }

  public function sarana_pendidikan_edit(tabelC5 $tabelC5)
  {
    //
    return view('kriteria.c5.sarana_pendidikan.form');
  }

  public function sarana_pendidikan_update(Request $request, tabelC5 $tabelC5)
  {
    //
  }

  public function sarana_pendidikan_destroy(tabelC5 $tabelC5)
  {
    //
  }


}
