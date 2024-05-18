<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Dosen;
use Illuminate\Support\Facades\Session;

class DosenController extends Controller
{
    // Read all
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    // Read single
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    // Create new
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.form');
    }

    // Store new
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nidn_nidk' => 'required|unique:tabel_dosen,nidn_nidk',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'sertifikat_pendidik' => 'required',
            'jabatan_fungsional' => 'required',
            'gelar_akademik' => 'required',
            'pendidikan' => 'required',
            'bidang_keahlian' => 'required',
            'sesuai_ps' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('danger', 'Data Gagal Disimpan')->withInput()->withErrors($validator);
        }

        $dosen = new Dosen();
        $dosen->nidn_nidk = $request->input('nidn_nidk');
        $dosen->nama = $request->input('nama');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->sertifikat_pendidik = $request->input('sertifikat_pendidik');
        $dosen->jabatan_fungsional = $request->input('jabatan_fungsional');
        $dosen->gelar_akademik = $request->input('gelar_akademik');
        $dosen->pendidikan = $request->input('pendidikan');
        $dosen->bidang_keahlian = $request->input('bidang_keahlian');
        $dosen->sesuai_ps = $request->input('sesuai_ps');

        $dosen->save();

        return redirect(route('dosen.index'))->with('success', 'Data Berhasil Disimpan');
    }

    // Edit existing
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.form', compact('dosen'));
    }

    // Update existing
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nidn_nidk' => 'required|unique:tabel_dosen,nidn_nidk,' . $id,
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'sertifikat_pendidik' => 'required',
            'jabatan_fungsional' => 'required',
            'gelar_akademik' => 'required',
            'pendidikan' => 'required',
            'bidang_keahlian' => 'required',
            'sesuai_ps' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('danger', 'Data Gagal Diupdate');
        }

        $dosen = Dosen::findOrFail($id);

        $dosen->nidn_nidk = $request->input('nidn_nidk');
        $dosen->nama = $request->input('nama');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->sertifikat_pendidik = $request->input('sertifikat_pendidik');
        $dosen->jabatan_fungsional = $request->input('jabatan_fungsional');
        $dosen->gelar_akademik = $request->input('gelar_akademik');
        $dosen->pendidikan = $request->input('pendidikan');
        $dosen->bidang_keahlian = $request->input('bidang_keahlian');
        $dosen->sesuai_ps = $request->input('sesuai_ps');

        $dosen->save();

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    // Delete existing
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        $dosen->delete();

        return redirect('/dosen')->with('success', 'Data Berhasil Dihapus');
    }
}

