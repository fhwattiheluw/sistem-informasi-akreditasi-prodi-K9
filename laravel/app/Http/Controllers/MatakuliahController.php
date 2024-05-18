<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $dataMatakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('dataMatakuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'kode' => 'required|unique:matakuliah'
        ]);

        $matakuliah = new Matakuliah();
        $matakuliah->nama = $request->nama;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->kode = $request->kode;

        $matakuliah->save();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambahkan!');
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'kode' => 'required|unique:matakuliah,kode,' . $id
        ]);

        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->nama = $request->nama;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->kode = $request->kode;

        $matakuliah->save();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil diupdate!');
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil dihapus!');
    }

}

