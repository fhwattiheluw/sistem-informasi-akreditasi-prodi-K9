<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AkunCreated;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;

class AkunController extends Controller
{
    public function index()
    {
        return view('akun.manag_akun');
    }

    public function create()
    {
        return view('akun.form_akun');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
        ]);

        $akun = User::create($validatedData);
        
        $email = new sendEmail($akun); // Create an instance of the AkunCreated Mailable class
        Mail::to($validatedData['email'])->send($email); // Send the email

        return redirect()->route('akun.index')->with('success', 'Akun berhasil dibuat');
    }

    public function show(Akun $akun)
    {
        return view('akun.detail', compact('akun'));
    }

    public function edit(Akun $akun)
    {
        return view('akun.edit', compact('akun'));
    }

    public function update(Request $request, User $akun)
    {
        $validatedData = $request->validate([
            'nama_akun' => 'required|string|max:255',
            'nomor_akun' => 'required|numeric|unique:akuns,'.$akun->id,
            'email' => 'required|email',
        ]);

        $akun->update($validatedData);

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy(Akun $akun)
    {
        $akun->delete();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus');
    }
}

