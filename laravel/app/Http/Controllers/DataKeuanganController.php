<?php

namespace App\Http\Controllers;

use App\Models\dataKeuangan;
use Illuminate\Http\Request;

class DataKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kriteria.dataKeuangan.index');
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
        //
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
    public function edit(dataKeuangan $dataKeuangan)
    {
        //
        return view('kriteria.dataKeuangan.form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKeuangan $dataKeuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKeuangan  $dataKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKeuangan $dataKeuangan)
    {
        //
    }
}
