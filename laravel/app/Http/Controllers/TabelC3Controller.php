<?php

namespace App\Http\Controllers;

use App\Models\tabelC3;
use App\Models\TabelK3MahasiswaReguler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    $items = TabelK3MahasiswaReguler::latest('tahun_akademik')->take(4)->get();
    
    $tahun_sekarang = date('Y');
    foreach($items as $item){
      $selisih = $tahun_sekarang - $item->tahun_akademik;
      $ta = ($selisih == 0) ? 'TS' : 'TS-' . $selisih;

      $data = new \stdClass;

      $data->id = $item->id;
      $data->ta = $ta;
      $data->daya_tampung = $item->daya_tampung;
      $data->pendaftar = $item->pendaftar;
      $data->lulus_seleksi = $item->lulus_seleksi;
      $data->jum_mahasiswa_baru = $item->jum_mahasiswa_baru;
      $data->total = $item->total;  

      $datas[] = $data;
    }

    $tot[0] = $items->sum('daya_tampung');
    $tot[1] = $items->sum('pendaftar');
    $tot[2] = $items->sum('lulus_seleksi');
    $tot[3] = $items->sum('jum_mahasiswa_baru');
    $tot[4] = $items->sum('total');
    return view('kriteria.c3.mahasiswa_reguler.index', ['items' => $datas, 'total' => $tot]);
  }

  public function mahasiswa_reguler_create()
  {
    //
    return view('kriteria.c3.mahasiswa_reguler.form');
  }

  public function mahasiswa_reguler_store(Request $request)
  {
    $request->validate([
      'tahun_akademik' => 'unique:tabel_k3_mahasiswa_reguler,tahun_akademik',
      'daya_tampung' => 'required',
      'pendaftar' => 'required',
      'lulus_seleksi' => 'required',
      'jum_mahasiswa_baru' => 'required',
      'total' => 'required'
    ]);

    TabelK3MahasiswaReguler::create([
      'tahun_akademik' => $request->tahun_akademik,
      'daya_tampung' => $request->daya_tampung,
      'pendaftar' => $request->pendaftar,
      'lulus_seleksi' =>  $request->lulus_seleksi,
      'jum_mahasiswa_baru' => $request->jum_mahasiswa_baru,
      'total' => $request->total,
      'tautan' => $request->tautan
    ]);

    return redirect('/kriteria3/mahasiswa_reguler')->with('success', 'Data K3 Mahasiswa Reguler created successfully');
  }

  public function mahasiswa_reguler_show(tabelC3 $tabelC3)
  {
    //
  }

  public function mahasiswa_reguler_edit($id)
  {
    $item = TabelK3MahasiswaReguler::findOrFail($id);
    return view('kriteria.c3.mahasiswa_reguler.form', ['item' => $item]);
  }

  public function mahasiswa_reguler_update(Request $request, $id)
  {
    $idx =Crypt::decryptString($id);
    $data = TabelK3MahasiswaReguler::find($idx);

    $request->validate([
      'tahun_akademik' => 'required',
      'daya_tampung' => 'required',
      'pendaftar' => 'required',
      'lulus_seleksi' => 'required',
      'jum_mahasiswa_baru' => 'required',
      'total' => 'required'
    ]);

    $data->update([
      'tahun_akademik' => $request->tahun_akademik,
      'daya_tampung' => $request->daya_tampung,
      'pendaftar' => $request->pendaftar,
      'lulus_seleksi' =>  $request->lulus_seleksi,
      'jum_mahasiswa_baru' => $request->jum_mahasiswa_baru,
      'total' => $request->total,
      'tautan' => $request->tautan
    ]);

    return redirect('/kriteria3/mahasiswa_reguler')->with('success', 'Data K3 Mahasiswa Reguler UPDATED successfully');
  }

  public function mahasiswa_reguler_destroy($id)
  {
    TabelK3MahasiswaReguler::destroy($id);
    return redirect('/kriteria3/mahasiswa_reguler')->with('success', 'Data K3 Mahasiswa Reguler DELETED successfully');
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
