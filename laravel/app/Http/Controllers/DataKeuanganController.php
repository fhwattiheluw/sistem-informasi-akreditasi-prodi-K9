<?php

namespace App\Http\Controllers;

use App\Models\dataKeuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DataKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = dataKeuangan::orderBy('tahun','asc')->get();
        return view('kriteria.dataKeuangan.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kriteria.dataKeuangan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'tahun' => 'required|min:2',
            'pendidikan_per_mahasiswa' => 'required|integer',
            'penelitian_per_dosen' => 'required|integer',
            'pkm_per_dosen' => 'required|integer',
            'publikasi_per_dosen' => 'required|integer',
            'investasi' => 'required',
        ]);

        dataKeuangan::create([
            'tahun' => $request->input('tahun'),
            'pendidikan_per_mahasiswa' => $request->input('pendidikan_per_mahasiswa'),
            'penelitian_per_dosen' => $request->input('penelitian_per_dosen'),
            'pkm_per_dosen' => $request->input('pkm_per_dosen'),
            'publikasi_per_dosen' => $request->input('publikasi_per_dosen'),
            'investasi' => preg_replace("/[^0-9]/", "", $request->input('investasi')),
            'tautan' => $request->input('tautan'),            
        ]);
        return redirect('/datakeuangan')->with('success', 'Data Keuangan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function show(dataKeuangan $dataKeuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKeuangan $dataKeuangan, $id)
    {
        $item = dataKeuangan::find($id);
        return view('kriteria.dataKeuangan.form', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKeuangan $dataKeuangan, $id)
    {
        
        $idx =Crypt::decryptString($id);
        $data = dataKeuangan::find($idx);
        
        $request->validate([
            'tahun' => 'required|min:2',
            'pendidikan_per_mahasiswa' => 'required|integer',
            'penelitian_per_dosen' => 'required|integer',
            'pkm_per_dosen' => 'required|integer',
            'publikasi_per_dosen' => 'required|integer',
            'investasi' => 'required',
        ]);
        $invest = number_format(preg_replace("/[^0-9]/", "", $request->input('investasi')),2, '.', '');

        $data->update([
            'tahun' => $request->input('tahun'),
            'pendidikan_per_mahasiswa' => $request->input('pendidikan_per_mahasiswa'),
            'penelitian_per_dosen' => $request->input('penelitian_per_dosen'),
            'pkm_per_dosen' => $request->input('pkm_per_dosen'),
            'publikasi_per_dosen' => $request->input('publikasi_per_dosen'),
            'investasi' => $invest,
            'tautan' => $request->input('tautan'),  
        ]);

        return redirect('/datakeuangan')->with('success', 'Data Keuangan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKeuangan $dataKeuangan, $id)
    {
        dataKeuangan::destroy($id);
        return redirect('/datakeuangan')->with('success', 'Data Keuangan deleted successfully');
    }
}
