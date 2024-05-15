<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AkunCreated;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DataProgramStudiController;

class AkunController extends Controller
{
    protected $prodiController;

     public function __construct(Type $var = null,DataProgramStudiController $prodiController) {
        $this->prodiController = $prodiController;
    }


    public function index()
    { 
        $dataUser = User::where('id', '!=', 1)->get();

        if($dataUser->count() == 0) {
            return view('akun.manag_akun', compact('dataUser'))->with('info', 'Tidak ada data user.');
        }
        
        return view('akun.manag_akun', compact('dataUser'));
    }

    public function create()
    {
        $prodi = $this->prodiController->getSemuaProdi();
        return view('akun.form_akun',compact('prodi'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin prodi,asesor',
            'prodi_id' => 'required',
        ]);
        
        $akun = User::create($validatedData);
        
        // $email = new sendEmail($akun);
        // Mail::to($validatedData['email'])->send($email);
        
        return redirect()->route('akun.index')->with('success', 'Akun berhasil dibuat');
    }

    public function edit($id)
    {
        $prodi = $this->prodiController->getSemuaProdi();
        $user = User::findOrFail($id);
        return view('akun.form_akun', compact(['user','prodi']));
    }

    public function update(Request $request, $id)
    {
        // Find the account by ID
        $akun = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin prodi,asesor',
            'prodi_id' => 'required',
        ]);
        
        $akun->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'prodi_id' => $request->prodi_id,
        ]);
        
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