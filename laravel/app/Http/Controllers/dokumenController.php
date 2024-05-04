<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dokumenController extends Controller
{
    /**
     * Menampilkan daftar dokumen.
     */
    public function index()
    {
        // Mengambil dan menampilkan semua dokumen
        return view('dokumen.semua_dokumen');
    }
    /**
     * Menampilkan form untuk membuat dokumen baru.
     */
    public function create()
    {
        // Kode untuk menampilkan form pembuatan dokumen
    }

    /**
     * Menyimpan dokumen baru.
     */
    public function store(Request $request)
    {
        // Kode untuk menyimpan dokumen baru
    }

    /**
     * Menampilkan dokumen tertentu.
     */
    public function show($id)
    {
        // Kode untuk menampilkan dokumen tertentu
    }
}
