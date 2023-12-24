<?php

namespace App\Http\Controllers;

use App\Models\tabelC3;
use Illuminate\Http\Request;

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
     * @param  \App\Models\tabelC3  $tabelC3
     * @return \Illuminate\Http\Response
     */
    public function show(tabelC3 $tabelC3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC3  $tabelC3
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelC3 $tabelC3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC3  $tabelC3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabelC3 $tabelC3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC3  $tabelC3
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelC3 $tabelC3)
    {
        //
    }
}
