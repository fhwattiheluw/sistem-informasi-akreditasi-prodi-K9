<?php

namespace App\Http\Controllers;

use App\Models\dataProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DataProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_prodi = dataProgramStudi::first();
        return view('kriteria.dataProdi.index', ['prodi' => $data_prodi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataProgramStudi  $dataProgramStudi
     * @return \Illuminate\Http\Response
     */
    public function show(dataProgramStudi $dataProgramStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataProgramStudi  $dataProgramStudi
     * @return \Illuminate\Http\Response
     */
    public function edit(dataProgramStudi $dataProgramStudi)
    {
        $item = dataProgramStudi::first();
        return view('kriteria.dataprodi.form', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataProgramStudi  $dataProgramStudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, dataProgramStudi $dataProgramStudi)
    {
        $idx =Crypt::decryptString($id);
        
        $data = dataProgramStudi::find($idx);

        // Validasi input jika diperlukan
        $request->validate([
            'jenis' => 'required|max:255',
            'nama' => 'required',
            'status_peringkat' => 'required',
            'nomor_sk' => 'required|min:6',
            'tanggal_sk' => 'required|min:8',
            'tanggal_kadaluarsa' => 'required|min:8',
            'jumlah_mhs_ts' => 'required|integer',
            'jumlah_dtps_ts' => 'required|integer',
            'rerata_ipk' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'rerata_masa_studi' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        // Perbarui data
        $data->update([
            'jenis' => $request->input('jenis'),
            'nama' => $request->input('nama'),
            'status_peringkat' => $request->input('status_peringkat'),
            'nomor_sk' => $request->input('nomor_sk'),
            'tanggal_sk' => $request->input('tanggal_sk'),
            'tanggal_kadaluarsa' => $request->input('tanggal_kadaluarsa'),
            'jumlah_mhs_ts' => $request->input('jumlah_mhs_ts'),
            'jumlah_dtps_ts' => $request->input('jumlah_dtps_ts'),
            'rerata_ipk' => $request->input('rerata_ipk'),
            'rerata_masa_studi' => $request->input('rerata_masa_studi')
        ]);

        return redirect('/dataprodi')->with('success', 'Data Prodi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataProgramStudi  $dataProgramStudi
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataProgramStudi $dataProgramStudi)
    {
        //
    }
}
