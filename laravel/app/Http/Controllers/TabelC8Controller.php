<?php

namespace App\Http\Controllers;

use App\Models\tabelC8;
use Illuminate\Http\Request;

class TabelC8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c8.index');
    }

    public function pelibatan_mahasiswa_dalam_pkm_index()
    {
        //
        return view('kriteria.c8.pelibatan_mahasiswa_dalam_pkm.index');
    }

    public function pelibatan_mahasiswa_dalam_pkm_create()
    {
        //
        return view('kriteria.c8.pelibatan_mahasiswa_dalam_pkm.form');
    }

    public function pelibatan_mahasiswa_dalam_pkm_store(Request $request)
    {
        //
    }


    public function pelibatan_mahasiswa_dalam_pkm_edit(tabelC8 $tabelC8)
    {
        //
        return view('kriteria.c8.pelibatan_mahasiswa_dalam_pkm.form');
        
    }


    public function pelibatan_mahasiswa_dalam_pkm_update(Request $request, tabelC8 $tabelC8)
    {
        //
    }


    public function pelibatan_mahasiswa_dalam_pkm_destroy(tabelC8 $tabelC8)
    {
        //
    }
}
