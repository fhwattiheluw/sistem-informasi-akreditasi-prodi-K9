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
        $dataUser = User::all();
        
        if($dataUser->count() == 0) {
            return view('akun.manag_akun', compact('dataUser'))->with('info', 'Tidak ada data user.');
        }
        
        return view('akun.manag_akun', compact('dataUser'));
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
            'level' => 'required|in:admin,author,reviewer',
        ]);
        
        $akun = User::create($validatedData);
        
        // $email = new sendEmail($akun);
        // Mail::to($validatedData['email'])->send($email);
        
        return redirect()->route('akun.index')->with('success', 'Akun berhasil dibuat');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('akun.form_akun', compact('user'));
    }

    public function update(Request $request, User $akun)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'level' => 'required|in:admin,author,reviewer',
        ]);
        
        $akun->update($validatedData);
        
        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy($email)
    {
        $user = User::where('email', $email)->first();
        
        if ($user) {
            $user->delete();
            return redirect()->route('akun.index')->with('success', 'Data pengguna berhasil dihapus');
        } else {
            return redirect()->route('akun.index')->with('error', 'Pengguna tidak ditemukan');
        }
    }

public function show($email)
{
    $user = User::where('email', $email)->first();

    if ($user) {
        return view('akun.detail', compact('user'));
    } else {
        return redirect()->route('dashboard.index')->with('error', 'Data pengguna tidak ditemukan');
    }
}



}