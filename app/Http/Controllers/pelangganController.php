<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pelanggan = pelanggan::all();
        return view('Pelanggan.index', compact('pelanggan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pelanggan = new Pelanggan();
        $pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $pelanggan->alamt_pelanggan = $request->alamt_pelanggan;
        $pelanggan->noHp_pelanggan = $request->noHp_pelanggan;
        $pelanggan->save();

        return redirect('/pelanggan');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
