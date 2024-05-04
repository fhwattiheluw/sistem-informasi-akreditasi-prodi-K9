<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repositoryController extends Controller
{
    public function index()
    {
        // kode untuk menampilkan data
        return view('repository.manajemen_dokumen');
    }

    public function store(Request $request)
    {
        // kode untuk menyimpan data baru
    }

    public function update(Request $request, $id)
    {
        // kode untuk memperbarui data berdasarkan id
    }

    public function destroy($id)
    {
        // kode untuk menghapus data berdasarkan id
    }

    public function formDokumen()
    {
        return view('repository.form_dokumen');
    }
}