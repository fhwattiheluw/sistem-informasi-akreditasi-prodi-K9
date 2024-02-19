<?php

namespace App\Http\Controllers;

use App\Models\tabelC7;
use Illuminate\Http\Request;

class TabelC7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kriteria.c7.index');
    }

    public function pelibatan_mahasiswa_dalam_penelitian_index()
    {
        //
        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.index');
    }

    public function pelibatan_mahasiswa_dalam_penelitian_create()
    {
        //
        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.form');
    }

    public function pelibatan_mahasiswa_dalam_penelitian_store(Request $request)
    {
        //
    }


    public function pelibatan_mahasiswa_dalam_penelitian_edit(tabelC8 $tabelC8)
    {
        //
        return view('kriteria.c7.pelibatan_mahasiswa_dalam_penelitian.form');
    }


    public function pelibatan_mahasiswa_dalam_penelitian_update(Request $request, tabelC8 $tabelC8)
    {
        //
    }


    public function pelibatan_mahasiswa_dalam_penelitian_destroy(tabelC8 $tabelC8)
    {
        //
    }

}
