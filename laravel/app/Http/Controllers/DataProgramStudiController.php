<?php

namespace App\Http\Controllers;

use App\Models\dataProgramStudi;
use Illuminate\Http\Request;

class DataProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kriteria.dataProdi.index');
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
        //
        return view('kriteria.dataprodi.form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataProgramStudi  $dataProgramStudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataProgramStudi $dataProgramStudi)
    {
        //
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
