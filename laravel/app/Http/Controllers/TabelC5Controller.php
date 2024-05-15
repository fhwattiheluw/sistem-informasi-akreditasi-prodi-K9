<?php

namespace App\Http\Controllers;

use App\Models\tabelC5;
use App\Models\TabelK5PrasaranPendidikan;
use App\Models\TabelK5SaranaPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TabelC5Controller extends Controller
{
  public $id_prodi;
  public function __construct()
  {
      $this->id_prodi = 1;
  }

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

  public function prasarana_pendidikan_index(Request $request)
  {
    $items = TabelK5PrasaranPendidikan::where('id_prodi', $this->id_prodi)->get();
    return view('kriteria.c5.prasarana_pendidikan.index', ['items'=>$items]);
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
    $items = TabelK5SaranaPendidikan::all();
    return view('kriteria.c5.sarana_pendidikan.index', ['items'=>$items]);
  }
  public function sarana_pendidikan_create()
  {
    //
    return view('kriteria.c5.sarana_pendidikan.form');
  }

  public function sarana_pendidikan_store(Request $request)
  {
    $request->validate([
      'jenis_sarana' => 'required',
      'jumlah_unit'  => 'required|numeric',
      'kualitas'  => 'required',
      'kondisi' => 'required',
      'unit_pengelola' => 'required',
      'tautan' => 'required',
    ]);

    TabelK5SaranaPendidikan::create([
      'jenis_sarana'  => $request->jenis_sarana,
      'jumlah_unit'  => $request->jumlah_unit,
      'kualitas'  => $request->kualitas,
      'kondisi' => $request->kondisi,
      'unit_pengelola' => $request->unit_pengelola,
      'tautan' => $request->tautan,
    ]);
    return redirect()->route('sarana_pendidikan.index')->with('success', 'Data K5 Sarana Pendidikan ADDED successfully');
  }

  public function sarana_pendidikan_show(tabelC5 $tabelC5)
  {
    //
  }

  public function sarana_pendidikan_edit($id)
  {
    $item = TabelK5SaranaPendidikan::findOrFail($id);
    return view('kriteria.c5.sarana_pendidikan.form', ['item'=>$item]);
  }

  public function sarana_pendidikan_update(Request $request, $id)
  {
    $idx = Crypt::decryptString($id);
    $data = TabelK5SaranaPendidikan::findOrFail($idx);
    $request->validate([
      'jenis_sarana' => 'required',
      'jumlah_unit'  => 'required|numeric',
      'kualitas'  => 'required',
      'kondisi' => 'required',
      'unit_pengelola' => 'required',
      'tautan' => 'required',
    ]);
    $data->update([
      'jenis_sarana'  => $request->jenis_sarana,
      'jumlah_unit'  => $request->jumlah_unit,
      'kualitas'  => $request->kualitas,
      'kondisi' => $request->kondisi,
      'unit_pengelola' => $request->unit_pengelola,
      'tautan' => $request->tautan,
    ]);
    return redirect()->route('sarana_pendidikan.index')->with('success', 'Data K5 Sarana Pendidikan UPDATED successfully');
  }

  public function sarana_pendidikan_destroy($id)
  {
    TabelK5SaranaPendidikan::destroy($id);
    return redirect()->route('sarana_pendidikan.index')->with('success', 'Data K5 Sarana Pendidikan DELETED successfully');
  }


}
