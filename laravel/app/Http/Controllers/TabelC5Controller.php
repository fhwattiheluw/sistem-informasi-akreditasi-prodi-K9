<?php

namespace App\Http\Controllers;

use App\Models\tabelC5;
use App\Models\TabelK5DanaPenelitian;
use App\Models\TabelK5DanaPKM;
use App\Models\TabelK5PemerolehanDana;
use App\Models\TabelK5PenggunaanDana;
use App\Models\TabelK5PrasaranPendidikan;
use App\Models\TabelK5SaranaPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
    $prodiId = Auth::user()->prodi_id;
    $data = TabelK5PemerolehanDana::where('prodi_id', $prodiId)->get();

    return view('kriteria.c5.pemerolehan_dana.index', compact('data'));
  }
  public function pemerolehan_dana_create()
  {
    //
    return view('kriteria.c5.pemerolehan_dana.form');
  }

  public function pemerolehan_dana_store(Request $request)
  {
    // Validate request data
    $request->validate([
      'sumber_dana' => 'required|string|max:255',
      'jenis_dana' => 'required|string|max:255',
      'jumlah_ts2' => 'required|numeric',
      'jumlah_ts1' => 'required|numeric',
      'jumlah_ts' => 'required|numeric',
      'tautan' => 'required|string|max:255',
    ]);

      // Get 'prodi_id' from logged-in user session
    $prodiId = Auth::user()->prodi_id;

    // Create a new record
    $dana = TabelK5PemerolehanDana::create([
      'sumber_dana' => $request->sumber_dana,
      'jenis_dana' => $request->jenis_dana,
      'jumlah_ts2' => $request->jumlah_ts2,
      'jumlah_ts1' => $request->jumlah_ts1,
      'jumlah_ts' => $request->jumlah_ts,
      'tautan' => $request->tautan,
      'prodi_id' => $prodiId,
    ]);
    
    return redirect()->route('prasarana_pendidikan.index')->with('success', 'Data K5 Pemerolehan Dana ADDED successfully');    
  }

  public function pemerolehan_dana_show(tabelC5 $tabelC5)
  {
    //
  }

  public function pemerolehan_dana_edit($id)
  {
    $item = TabelK5PemerolehanDana::findOrFail($id);
    return view('kriteria.c5.pemerolehan_dana.form', ['item' => $item]);
  }

  public function pemerolehan_dana_update(Request $request, $id)
  {
    // Validate request data
    $request->validate([
      'sumber_dana' => 'required|string|max:255',
      'jenis_dana' => 'required|string|max:255',
      'jumlah_ts2' => 'required|numeric',
      'jumlah_ts1' => 'required|numeric',
      'jumlah_ts' => 'required|numeric',
      'tautan' => 'required|string|max:255',
    ]);

    // Find the record by ID
    $dana = TabelK5PemerolehanDana::findOrFail($id);

    // Verify the 'prodi_id' matches the logged-in user
    if ($dana->prodi_id != Auth::user()->prodi_id) {
        return redirect()->route('dana.index')->with('error', 'Unauthorized action.');
    }
    // Update the record
    $dana->update($request->all());

    return redirect()->route('prasarana_pendidikan.index')->with('success', 'Data K5 Pemerolehan Dana UPDATED successfully');    

  }

  public function pemerolehan_dana_destroy($id)
  {
    // Find the record by ID
    $dana = TabelK5PemerolehanDana::findOrFail($id);

    // Verify the 'prodi_id' matches the logged-in user
    if ($dana->prodi_id != Auth::user()->prodi_id) {
        return redirect()->route('pemorelahan_dana.index')->with('error', 'Unauthorized action.');
    }

    // Delete the record
    $dana->delete();
    return redirect()->route('pemorelahan_dana.index')->with('success', 'Data K5 Pemerolehan Dana DELETED successfully');    
  }

  // // Kriteria 5 > Tabel Penggunaan Dana

  public function penggunaan_dana_index()
  {
    $items = TabelK5PenggunaanDana::where('prodi_id', auth()->user()->prodi_id)->get();
    return view('kriteria.c5.penggunaan_dana.index', compact('items'));
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
    $items = TabelK5DanaPenelitian::where('prodi_id', auth()->user()->id)->get();
    
    return view('kriteria.c5.dana_penelitian.index', ['items'=>$items]);
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
    // $items = TabelK5DanaPenelitian::where('prodi_id', auth()->user()->id)->get();
    $items = TabelK5DanaPKM::where('prodi_id', auth()->user()->prodi_id)->get();
    // foreach($items as $item){
    //   echo $item->dosen->nama;
    // }
    return view('kriteria.c5.dana_pkm.index', ['items'=>$items]);
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
    $items = TabelK5PrasaranPendidikan::where('prodi_id',  auth()->user()->prodi_id)->get();
    return view('kriteria.c5.prasarana_pendidikan.index', ['items'=>$items]);
  }
  public function prasarana_pendidikan_create()
  {
    return view('kriteria.c5.prasarana_pendidikan.form');
  }

  public function prasarana_pendidikan_store(Request $request)
  {
    $request->validate([
      "jenis_prasarana" => "required",
      "jumlah_unit" => "required",
      "luas" => "required",
      "kepemilikan" => "required",
      "kondisi" => "required",
      "penggunaan" => "required",      
    ]);

    TabelK5PrasaranPendidikan::create([
      "jenis_prasarana" => $request->jenis_prasarana,
      "jumlah_unit" => $request->jumlah_unit,
      "luas" => $request->luas,
      "kepemilikan" => $request->kepemilikan,
      "kondisi" => $request->kondisi,
      "penggunaan" => $request->penggunaan,
      "tautan" => $request->tautan,
      "prodi_id" => auth()->user()->prodi_id,
    ]);

    return redirect()->route('prasarana_pendidikan.index')->with('success', 'Data K5 Prasarana Pendidikan ADDED successfully');    
  }

  public function prasarana_pendidikan_show(tabelC5 $tabelC5)
  {
    //
  }

  public function prasarana_pendidikan_edit($id)
  {
    $item = TabelK5PrasaranPendidikan::findOrFail($id);
    return view('kriteria.c5.prasarana_pendidikan.form', ['item'=>$item]);
  }

  public function prasarana_pendidikan_update(Request $request, $id)
  {
    $idx = Crypt::decryptString($id);
    $data = TabelK5PrasaranPendidikan::findOrFail($idx);

    $request->validate([
      "jenis_prasarana" => "required",
      "jumlah_unit" => "required",
      "luas" => "required",
      "kepemilikan" => "required",
      "kondisi" => "required",
      "penggunaan" => "required",      
    ]);

    $data->update([
      "jenis_prasarana" => $request->jenis_prasarana,
      "jumlah_unit" => $request->jumlah_unit,
      "luas" => $request->luas,
      "kepemilikan" => $request->kepemilikan,
      "kondisi" => $request->kondisi,
      "penggunaan" => $request->penggunaan,
      "tautan" => $request->tautan,
    ]);

    return redirect()->route('prasarana_pendidikan.index')->with('success', 'Data K5 Prasarana Pendidikan UPDATED successfully');    
  }

  public function prasarana_pendidikan_destroy($id)
  {
    TabelK5PrasaranPendidikan::destroy($id);
    return redirect()->route('prasarana_pendidikan.index')->with('success', 'Data K5 Prasarana Pendidikan DELETED successfully');
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
