<?php

namespace App\Http\Controllers;

use App\Models\tabelC4;
use Illuminate\Http\Request;

class TabelC4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c4.index');
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
     * @param  \App\Models\tabelC4  $tabelC4
     * @return \Illuminate\Http\Response
     */
    public function show(tabelC4 $tabelC4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelC4  $tabelC4
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelC4 $tabelC4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tabelC4  $tabelC4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tabelC4 $tabelC4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelC4  $tabelC4
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelC4 $tabelC4)
    {
        //
    }
}
