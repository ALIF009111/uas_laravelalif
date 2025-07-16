<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Produk;
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
        $pesanan = Pesanan::all();
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('Pesanan.form',compact('pesanan','pelanggan','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pesanan = new Pesanan();
        $pesanan->nm_pesanan = $request->nm_pesanan;
        $pesanan->pelanggans_id = $request->pelanggan;
        $pesanan->produks_id = $request->produk;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->total_harga = $request->total_harga;
        $pesanan->tgl_pesanan = $request->tgl_pesanan;
        $pesanan->tgl_pengambilan = $request->tgl_pengambilan;
        $pesanan->status_pemesanan = $request->status_pemesanan;
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
        $pesanan = Pesanan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('Pesanan.edit',compact('pesanan','pelanggan','produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->nm_pesanan = $request->nm_pesanan;
        $pesanan->pelanggans_id = $request->pelanggan;
        $pesanan->produks_id = $request->produk;
        $pesanan->jumlah = $request->jumlah;
        $pesanan->total_harga = $request->total_harga;
        $pesanan->tgl_pesanan = $request->tgl_pesanan;
        $pesanan->tgl_pengambilan = $request->tgl_pengambilan;
        $pesanan->status_pemesanan = $request->status_pemesanan;
        $pesanan->save();

        return redirect('/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pesanan = Pesanan::find($id);
        $pesanan->delete();

        return redirect('/pesanan');
    }
}
