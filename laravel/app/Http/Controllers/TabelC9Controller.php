<?php

namespace App\Http\Controllers;

use App\Models\tabelC9;
use Illuminate\Http\Request;

class TabelC9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c9.index');
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
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function show(tabelC9 $tabelC9)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelC9 $tabelC9)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabelC9 $tabelC9)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC9  $tabelC9
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelC9 $tabelC9)
    {
        //
    }
}
