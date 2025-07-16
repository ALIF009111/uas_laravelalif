<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $nomor = 1;
        $pembayaran = Pembayaran::all();
        return view('Pembayaran.index',compact('pembayaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pesanan = Pesanan::all();
        $pembayaran = Pembayaran::all();
        return view('Pembayaran.form',compact('pesanan','pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pembayaran = new Pembayaran();
        $pembayaran->pesanans_id = $request->pesanan;
        $pembayaran->metode_bayar = $request->metode_bayar;
        $pembayaran->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran->total_tagihan = $request->total_tagihan;
        $pembayaran->kembalian = $request->kembalian;
        $pembayaran->save();

        return redirect('/pembayaran');
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
        $pembayaran = Pembayaran::findOrFail($id);
        $pesanan = Pesanan::all();
        return view('Pembayaran.edit',compact('pembayaran', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->pesanans_id = $request->pesanan;
        $pembayaran->metode_bayar = $request->metode_bayar;
        $pembayaran->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran->total_tagihan = $request->total_tagihan;
        $pembayaran->kembalian = $request->kembalian;
        $pembayaran->save();

        return redirect('/pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect('/pembayaran');
    }
}
