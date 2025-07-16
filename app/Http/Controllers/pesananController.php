<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pesanan = Pesanan::all();
        return view('Pesanan.index', compact('pesanan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pesanan = new Pesanan();
        $pesanan->id_pesanan = $request->id_pesanan;
        $pesanan->id_pelanggan = $request->id_pelanggan;
        $pesanan->id_produk = $request->id_produk;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->total_harga = $request->total_harga;
        $pesanan->tgl_pesanan = $request->tgl_pesanan;
        $pesanan->tgl_pengambilan = $request->tgl_pengambilan;
        $pesanan->status_pemesanan = $request->status_Pemesanan;
        $pesanan->save();

        return redirect('/pesanan');
    }

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
