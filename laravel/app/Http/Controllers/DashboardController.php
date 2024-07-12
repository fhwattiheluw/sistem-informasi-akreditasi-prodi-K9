<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\DataProgramStudiController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  void
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_fakultas = Auth::user()->prodi->fakultas_id;
        
        $programStudiController = new DataProgramStudiController();
        $semuaProdi = $programStudiController->getSemuaProdi();

        if (session()->has('prodi') && !empty(session()->get('prodi'))) {
            return view('dashboard.index', compact('semuaProdi'));
        }

        return view('dashboard.index', compact('semuaProdi'))
            ->withErrors(['pesan' => 'Silahkan pilih prodi terlebih dahulu']);
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
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
        return view('dashboard.form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
