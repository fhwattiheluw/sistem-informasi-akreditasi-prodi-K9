<?php

namespace App\Http\Controllers;

use App\Models\tabelC6;
use Illuminate\Http\Request;

class TabelC6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c6.index');
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
     * @param  \App\Models\tabelC6  $tabelC6
     * @return \Illuminate\Http\Response
     */
    public function show(tabelC6 $tabelC6)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC6  $tabelC6
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelC6 $tabelC6)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC6  $tabelC6
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabelC6 $tabelC6)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC6  $tabelC6
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelC6 $tabelC6)
    {
        //
    }
}
