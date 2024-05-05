<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class dokumenController extends Controller
{
    /**
     * Menampilkan daftar dokumen.
     */
    public function index()
    {
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
        $validatedData = $request->validate([
            'document' => 'required|file|mimes:pdf|max:2048', // Hanya file PDF dan maksimal 2MB
            'documentName' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'repository_id' => 'required|integer' // Menambahkan validasi untuk repository_id
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/documents', $filename); // Memperbaiki path penyimpanan file

            $dokumen = new Dokumen();
            $dokumen->nama_dokumen = $validatedData['documentName'];
            $dokumen->keterangan = $validatedData['description'];
            $dokumen->path = 'storage/documents/' . $filename; // Menyesuaikan path yang disimpan di database
            $dokumen->repository_id = $validatedData['repository_id']; // Menetapkan repository_id dari data yang divalidasi
            $dokumen->save();
            return back()->with('success', 'Dokumen berhasil disimpan.');
        } else {
            return back()->with('error', 'Gagal mengupload dokumen.');
        }
    }

    /**
     * Menampilkan dokumen tertentu.
     */
    public function show($id)
    {
        // Kode untuk menampilkan dokumen tertentu
    }
}
