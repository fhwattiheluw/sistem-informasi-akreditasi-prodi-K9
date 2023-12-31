<?php

namespace App\Http\Controllers;

use App\Models\tabelC2;
use App\Models\TabelK2BidangKelembagaan;
use App\Models\TabelK2BidangPendidikan;
use App\Models\TabelK2BidangPenelitian;
use App\Models\TabelK2BidangPkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    $items = TabelK2BidangPendidikan::all();
    $jum_inter = TabelK2BidangPendidikan::where('tingkat', 'Internasional')->count();
    $jum_nasional = TabelK2BidangPendidikan::where('tingkat', 'Nasional')->count();
    $jum_lokal = TabelK2BidangPendidikan::where('tingkat', 'Lokal')->count();
    return view('kriteria.c2.bidang_pendidikan.index', ['items' => $items, 'jum_inter' => $jum_inter, 'jum_nasional' => $jum_nasional, 'jum_lokal' => $jum_lokal]);
  }
  public function bidang_pendidikan_create($bidang)
  {
    return view('kriteria.c2.form', ['bidang' => $bidang]);
  }
  public function bidang_pendidikan_store(Request $request)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPendidikan::create([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);

    return redirect('/kriteria2/bidang_pendidikan')->with('success', 'Data K2 Bidang Pendidikan created successfully');
  }
  public function bidang_pendidikan_edit(tabelC2 $tabelC2, $id, $bidang)
  {
    $item = TabelK2BidangPendidikan::find($id);
    return view('kriteria.c2.form', ['bidang' => $bidang, 'item' => $item]);
  }
  public function bidang_pendidikan_update(Request $request, $id, tabelC2 $tabelC2, $bidang)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPendidikan::where('id', $id)->update([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);

    return redirect('/kriteria2/bidang_pendidikan')->with('success', 'Data K2 Bidang Pendidikan updated successfully');
  }

  public function bidang_pendidikan_destroy($id)
  {
    TabelK2BidangPendidikan::destroy($id);
    return redirect('/kriteria2/bidang_pendidikan')->with('success', 'Data K2 Bidang Pendidikan deleted successfully');
  }

  // bidang Penelitian
  public function bidang_penelitian_index()
  {
    $items = TabelK2BidangPenelitian::all();
    $jum_inter = TabelK2BidangPenelitian::where('tingkat', 'Internasional')->count();
    $jum_nasional = TabelK2BidangPenelitian::where('tingkat', 'Nasional')->count();
    $jum_lokal = TabelK2BidangPenelitian::where('tingkat', 'Lokal')->count();
    return view('kriteria.c2.bidang_penelitian.index', ['items' => $items, 'jum_inter' => $jum_inter, 'jum_nasional' => $jum_nasional, 'jum_lokal' => $jum_lokal]);
  }

  public function bidang_penelitian_create($bidang)
  {
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form', $data);
  }

  public function bidang_penelitian_store(Request $request)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPenelitian::create([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);
    return redirect('/kriteria2/bidang_penelitian')->with('success', 'Data K2 Bidang Penelitian created successfully');
  }
  public function bidang_penelitian_edit(tabelC2 $tabelC2, $id, $bidang)
  {
    $item = TabelK2BidangPenelitian::find($id);
    return view('kriteria.c2.form', ['bidang' => $bidang, 'item' => $item]);
  }
  public function bidang_penelitian_update(Request $request, $id)
  {    
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPenelitian::where('id', $id)->update([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);

    return redirect('/kriteria2/bidang_penelitian')->with('success', 'Data K2 Bidang Penelitian updated successfully');
  }

  public function bidang_penelitian_destroy($id)
  {
    TabelK2BidangPenelitian::destroy($id);
    return redirect('/kriteria2/bidang_penelitian')->with('success', 'Data K2 Bidang Penelitian deleted successfully');
  }

  // bidang Pengabdian Kepada Masyarakat (PKM)
  public function bidang_pkm_index()
  {
    $items = TabelK2BidangPkm::all();
    $jum_inter = TabelK2BidangPkm::where('tingkat', 'Internasional')->count();
    $jum_nasional = TabelK2BidangPkm::where('tingkat', 'Nasional')->count();
    $jum_lokal = TabelK2BidangPkm::where('tingkat', 'Lokal')->count();
    return view('kriteria.c2.bidang_Pkm.index', ['items' => $items, 'jum_inter' => $jum_inter, 'jum_nasional' => $jum_nasional, 'jum_lokal' => $jum_lokal]);
  }

  public function bidang_pkm_create($bidang)
  {
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form', $data);
  }

  public function bidang_pkm_store(Request $request)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPkm::create([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);
    return redirect('/kriteria2/bidang_pkm')->with('success', 'Data K2 Bidang PKM created successfully');
  }

  public function bidang_pkm_edit($id, $bidang)
  {
    $item = TabelK2BidangPkm::find($id);
    return view('kriteria.c2.form', ['bidang' => $bidang, 'item' => $item]);
  }

  public function bidang_pkm_update(Request $request, $id)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangPkm::where('id', $id)->update([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);

    return redirect('/kriteria2/bidang_pkm')->with('success', 'Data K2 Bidang PKM updated successfully');
  }

  public function bidang_pkm_destroy($id)
  {
    TabelK2BidangPkm::destroy($id);
    return redirect('/kriteria2/bidang_pkm')->with('success', 'Data K2 Bidang PKM deleted successfully');
  }

  // bidang Pengembangan Kelembagaan
  public function bidang_pengembangan_kelembagaan_index()
  {
    $items = TabelK2BidangKelembagaan::all();
    $jum_inter = TabelK2BidangKelembagaan::where('tingkat', 'Internasional')->count();
    $jum_nasional = TabelK2BidangKelembagaan::where('tingkat', 'Nasional')->count();
    $jum_lokal = TabelK2BidangKelembagaan::where('tingkat', 'Lokal')->count();
    return view('kriteria.c2.bidang_pengembangan_kelembagaan.index', ['items' => $items, 'jum_inter' => $jum_inter, 'jum_nasional' => $jum_nasional, 'jum_lokal' => $jum_lokal]);
  }
  public function bidang_pengembangan_kelembagaan_create($bidang)
  {
    $data['bidang'] = $bidang;
    return view('kriteria.c2.form', $data);
  }

  public function bidang_pengembangan_kelembagaan_store(Request $request)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangKelembagaan::create([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);
    return redirect('/kriteria2/bidang_pengembangan_kelembagaan')->with('success', 'Data K2 Bidang Pengembangan Kelembagaan created successfully');
  }

  public function bidang_pengembangan_kelembagaan_edit($id, $bidang)
  {
    $item = TabelK2BidangKelembagaan::find($id);
    return view('kriteria.c2.form', ['bidang' => $bidang, 'item' => $item]);
  }

  public function bidang_pengembangan_kelembagaan_update(Request $request, $id)
  {
    $request->validate([
      'nama_mitra' => 'required',
      'tingkat' => 'required',
      'judul_ruang_lingkup' => 'required|min:6',
      'manfaat_output' => 'required',
      'durasi' => 'required'
    ]);

    TabelK2BidangKelembagaan::where('id', $id)->update([
      'nama_mitra' => $request->input('nama_mitra'),
      'tingkat' => $request->input('tingkat'),
      'judul_ruang_lingkup' => $request->input('judul_ruang_lingkup'),
      'manfaat_output' => $request->input('manfaat_output'),
      'durasi' => $request->input('durasi'),
      'tautan' => $request->input('tautan')
    ]);

    return redirect('/kriteria2/bidang_pengembangan_kelembagaan')->with('success', 'Data K2 Bidang Pengembangan Kelembagaan updated successfully');
  }

  public function bidang_pengembangan_kelembagaan_destroy($id)
  {
    TabelK2BidangKelembagaan::destroy($id);
    return redirect('/kriteria2/bidang_pengembangan_kelembagaan')->with('success', 'Data K2 Bidang Pengembangan Kelembagaan deleted successfully');
  }
}
