<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function index()
    {
        // Kode untuk menampilkan data
        return view('repository.manajemen_repository');
    }

    public function store(Request $request)
    {
        // Kode untuk menyimpan data baru
    }

    public function update(Request $request, $id)
    {
        // Kode untuk memperbarui data berdasarkan id
    }

    public function destroy($id)
    {
        // Kode untuk menghapus data berdasarkan id
    }

    public function formRepository()
    {
        return view('repository.form_repository');
    }

    /**
     * Menampilkan isi dari repository tertentu berdasarkan id.
     */
    public function show($id)
    {
        // Ambil data repository berdasarkan id
        // $repository = Repository::find($id);

        // // Periksa jika repository tidak ditemukan
        // if (!$repository) {
        //     return redirect()->route('repository.semua')->with('error', 'Repository tidak ditemukan.');
        // }

        // Tampilkan view dengan data repository
        return view('repository.detail_repository');
    }
}
