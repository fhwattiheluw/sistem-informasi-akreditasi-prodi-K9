<?php

namespace App\Http\Controllers;

use App\Models\tabelC4;
use Illuminate\Http\Request;

class TabelC4Controller extends Controller
{
    public function index()
    {
        //
        return view('kriteria.c4.index');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(tabelC4 $tabelC4)
    {
        //
    }
    public function edit(tabelC4 $tabelC4)
    {
        //
    }
    public function update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function destroy(tabelC4 $tabelC4)
    {
        //
    }

    // Tabel 4.1.2.2 DTPS yang Bidang Keahliannya Sesuai dengan Bidang PS
    public function tabel_4_1_2_2_index()
    {
        //
        return view('kriteria.c4.tabel_4_1_2_2.index');
    }
    public function tabel_4_1_2_2_create()
    {
        //
    }
    public function tabel_4_1_2_2_store(Request $request)
    {
        //
    }
    public function tabel_4_1_2_2_show(tabelC4 $tabelC4)
    {
        //
    }
    public function tabel_4_1_2_2_edit(tabelC4 $tabelC4)
    {
        //
    }
    public function tabel_4_1_2_2_update(Request $request, tabelC4 $tabelC4)
    {
        //
    }
    public function tabel_4_1_2_2_destroy(tabelC4 $tabelC4)
    {
        //
    }


}
