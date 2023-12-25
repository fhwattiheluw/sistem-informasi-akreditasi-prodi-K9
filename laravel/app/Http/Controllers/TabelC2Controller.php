<?php

namespace App\Http\Controllers;

use App\Models\tabelC2;
use Illuminate\Http\Request;

class TabelC2Controller extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('kriteria.c2.index');
  }

  // bidang pendidikan
  public function bidang_pendidikan_index()
  {
    // code...
    return view('kriteria.c2.bidang_pendidikan.index');

  }
  public function bidang_pendidikan_create($bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pendidikan_store(Request $request)
  {
    //
  }
  public function bidang_pendidikan_edit(tabelC2 $tabelC2,$bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pendidikan_update(Request $request, tabelC2 $tabelC2)
  {
    //
  }
  public function bidang_pendidikan_destroy(tabelC2 $tabelC2)
  {
    //
  }

  // bidang Penelitian
  public function bidang_penelitian_index()
  {
    // code...
    return view('kriteria.c2.bidang_penelitian.index');

  }
  public function bidang_penelitian_create($bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_penelitian_store(Request $request)
  {
    //
  }
  public function bidang_penelitian_edit(tabelC2 $tabelC2,$bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_penelitian_update(Request $request, tabelC2 $tabelC2)
  {
    //
  }
  public function bidang_penelitian_destroy(tabelC2 $tabelC2)
  {
    //
  }

  // bidang Pengabdian Kepada Masyarakat (PKM)
  public function bidang_pkm_index()
  {
    // code...
    return view('kriteria.c2.bidang_pkm.index');

  }
  public function bidang_pkm_create($bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pkm_store(Request $request)
  {
    //
  }
  public function bidang_pkm_edit(tabelC2 $tabelC2,$bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pkm_update(Request $request, tabelC2 $tabelC2)
  {
    //
  }
  public function bidang_pkm_destroy(tabelC2 $tabelC2)
  {
    //
  }

  // bidang Pengembangan Kelembagaan
  public function bidang_pengembangan_kelembagaan_index()
  {
    // code...
    return view('kriteria.c2.bidang_pengembangan_kelembagaan.index');

  }
  public function bidang_pengembangan_kelembagaan_create($bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pengembangan_kelembagaan_store(Request $request)
  {
    //
  }
  public function bidang_pengembangan_kelembagaan_edit(tabelC2 $tabelC2,$bidang)
  {
    //
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form',$data);
  }
  public function bidang_pengembangan_kelembagaan_update(Request $request, tabelC2 $tabelC2)
  {
    //
  }
  public function bidang_pengembangan_kelembagaan_destroy(tabelC2 $tabelC2)
  {
    //
  }

}
