<?php

namespace App\Http\Controllers;

use App\Models\tabelC5;
use Illuminate\Http\Request;

class TabelC5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c5.index');
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
     * @param  \App\Models\tabelC5  $tabelC5
     * @return \Illuminate\Http\Response
     */
    public function show(tabelC5 $tabelC5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC5  $tabelC5
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelC5 $tabelC5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC5  $tabelC5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabelC5 $tabelC5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC5  $tabelC5
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelC5 $tabelC5)
    {
        //
    }
}
