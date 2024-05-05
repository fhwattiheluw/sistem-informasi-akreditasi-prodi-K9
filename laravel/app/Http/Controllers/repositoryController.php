<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repository; // Import model Repository
use App\Models\Dokumen; // Import model Dokumen

class RepositoryController extends Controller
{
    // Menampilkan semua data repository berdasarkan tahun dan kriteria
    public function index(Request $request)
    {
        $tahun = $request->input('tahun', null); // Menetapkan nilai default null jika tidak ada input
        $kriteria = $request->input('kriteria', null); // Menetapkan nilai default null jika tidak ada input

        // Query untuk mengambil data repository
        $repositories = Repository::where('tahun', $tahun)
                                  ->where('kriteria', $kriteria)
                                  ->get();

        // Cek jika data repository kosong
        if ($repositories->isEmpty()) {
            $repositories = collect(); // Menggunakan collect() untuk membuat koleksi kosong
            return view('repository.manajemen_repository', compact('repositories'))->with('error', 'Data tidak ditemukan.');
        } else {
            return view('repository.manajemen_repository', ['repositories' => $repositories])
                   ->with('success', 'Data berhasil ditampilkan.');
        }
    }

    // Menyimpan data repository baru
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'namaRepository' => 'required|string|max:255|unique:repository,nama_repository',
            'tahun' => 'required|integer',
            'kriteria' => 'required|integer'
        ]);

        // Membuat instance baru dari model Repository
        $repository = new Repository();
        $repository->nama_repository = $validatedData['namaRepository'];
        $repository->tahun = $validatedData['tahun'];
        $repository->kriteria = $validatedData['kriteria'];
        $repository->save();

        // Redirect ke form dengan pesan sukses
        return redirect()->route('repository.form')->with('success', 'Repository berhasil disimpan.');
    }

    // Fungsi untuk memperbarui data repository
    public function update(Request $request, $id)
    {
        // Kode untuk memperbarui data berdasarkan id
    }

    // Fungsi untuk menghapus data repository
    public function destroy($id)
    {
        // Kode untuk menghapus data berdasarkan id
    }

    // Menampilkan form untuk menambah repository
    public function formRepository()
    {
        return view('repository.form_repository');
    }

    // Menampilkan detail dari repository berdasarkan id
    public function show($id)
    {
        $repository = Repository::find($id);

        // Cek jika repository tidak ditemukan
        if (!$repository) {
            return redirect()->route('repository.semua')->with('error', 'Repository tidak ditemukan.');
        }

        // Mengambil semua dokumen yang terkait dengan repository ini
        $dokumen = Dokumen::where('repository_id', $id)->get();

        // Menambahkan dokumen ke view
        return view('repository.detail_repository', compact('repository', 'dokumen'));
    }
}
