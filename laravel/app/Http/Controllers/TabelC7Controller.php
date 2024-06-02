<?php

namespace App\Http\Controllers;

use App\Models\tabelC7;
use App\Models\TabelDosen;
use App\Models\TabelK7PelibatanMahasiswaPenelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TabelC7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c7.index');
    }

    public function pelibatan_mahasiswa_dalam_penelitian_index()
    {
        $items = TabelK7PelibatanMahasiswaPenelitian::where('prodi_id', auth()->user()->prodi_id)->get();
        $dosens = TabelDosen::where('prodi_id', auth()->user()->prodi_id)->get();
        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.index', compact('dosens', 'items'));
    }

    public function pelibatan_mahasiswa_dalam_penelitian_create()
    {
        $items = TabelK7PelibatanMahasiswaPenelitian::where('prodi_id', auth()->user()->prodi_id)->get();
        $dosens = TabelDosen::where('prodi_id', auth()->user()->prodi_id)->get();
        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.form', compact('items', 'dosens'));
    }

    public function pelibatan_mahasiswa_dalam_penelitian_store(Request $request)
    {
        $request->validate([
            'tahun_akademik' => 'required|max:4|min:4', 
            'judul' => 'required', 
            'dosen_ketua_id' => 'required', 
            'kepakaran_ketua' => 'required', 
            'dosen_anggota_id' => 'required', 
            'mahasiswa' => 'required', 
            'tautan' => 'required', 
        ], [
            'tahun_akademik' => 'Tahun Akademik harus berupa angka tahun, terdiri dari 4 karakter'
        ]);

        $prodiId = auth()->user()->prodi_id;

        if(isset($prodiId) &&  $prodiId != NULL){
            TabelK7PelibatanMahasiswaPenelitian::create([
                'tahun_akademik' => $request->tahun_akademik,
                'judul' => $request->judul,
                'dosen_ketua_id' => $request->dosen_ketua_id,
                'kepakaran_ketua' => $request->kepakaran_ketua,
                'dosen_anggota_id' => $request->dosen_anggota_id,
                'mahasiswa' => $request->mahasiswa,
                'tautan' => $request->tautan,
                'prodi_id' => $prodiId
            ]);
        }

        return redirect()->route('pelibatan_mahasiswa_dalam_penelitian.index')->with('success', 'Data K7 Pelibatan Mahasiswa dalam Penelelitian ADDED successfully');    
    }


    public function pelibatan_mahasiswa_dalam_penelitian_edit($id)
    {
        
        $item = TabelK7PelibatanMahasiswaPenelitian::findOrFail($id);
        $dosens = TabelDosen::where('prodi_id', auth()->user()->prodi_id)->get();

        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.form', compact('item','dosens'));
    }


    public function pelibatan_mahasiswa_dalam_penelitian_update(Request $request, $id)
    {
        $idx = Crypt::decryptString($id);
        $data = TabelK7PelibatanMahasiswaPenelitian::findOrFail($idx);

        $request->validate([
            'tahun_akademik' => 'required|max:4|min:4', 
            'judul' => 'required', 
            'dosen_ketua_id' => 'required', 
            'kepakaran_ketua' => 'required', 
            'dosen_anggota_id' => 'required', 
            'mahasiswa' => 'required', 
            'tautan' => 'required', 
        ], [
            'tahun_akademik' => 'Tahun Akademik harus berupa angka tahun, terdiri dari 4 karakter'
        ]);

        $prodiId = auth()->user()->prodi_id;

        if(isset($prodiId) &&  $prodiId != NULL){
            $data->update([
                'tahun_akademik' => $request->tahun_akademik,
                'judul' => $request->judul,
                'dosen_ketua_id' => $request->dosen_ketua_id,
                'kepakaran_ketua' => $request->kepakaran_ketua,
                'dosen_anggota_id' => $request->dosen_anggota_id,
                'mahasiswa' => $request->mahasiswa,
                'tautan' => $request->tautan,
            ]);
        }

        return redirect()->route('pelibatan_mahasiswa_dalam_penelitian.index')->with('success', 'Data K7 Pelibatan Mahasiswa dalam Penelelitian UPDATED successfully');    
    }


    public function pelibatan_mahasiswa_dalam_penelitian_destroy($id)
    {
        $prodiId = auth()->user()->prodi_id;

        if(isset($prodiId) &&  $prodiId != NULL){
            TabelK7PelibatanMahasiswaPenelitian::destroy($id);
        }
        return redirect()->route('pelibatan_mahasiswa_dalam_penelitian.index')->with('success', 'Data K7 Pelibatan Mahasiswa dalam Penelelitian UPDATED successfully');    
    }

}
