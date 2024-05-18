<?php

namespace App\Http\Controllers;

use App\Models\autentikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AutentikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    
    public function logout()
    {
        Auth::logout();
        Session::forget('prodi');
        
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard.index');
        }
    
        return back()->withInput()->withErrors(['gagal' => 'Email atau password salah']);
    }
    


    public function forgot_form()
    {
      // code...
      return view('forgot_password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autentikasi  $autentikasi
     * @return \Illuminate\Http\Response
     */
    public function show(autentikasi $autentikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autentikasi  $autentikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(autentikasi $autentikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autentikasi  $autentikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autentikasi $autentikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autentikasi  $autentikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(autentikasi $autentikasi)
    {
        //
    }
}
