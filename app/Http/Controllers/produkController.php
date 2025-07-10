<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $produk = produk::all();
        return view('Produk.index', compact('produk','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Produk.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
        //
    {
        //
        $produk = new Produk();
        $produk->nm_produk = $request->nm_produk;
        $produk->harga_satuan = $request->harga_satuan;
        $produk->stok = $request->stok;
        $produk->save();

        return redirect('/produk');
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
        $produk = produk::find($id);
        return view('Produk.edit',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    
        //
        {
        //
        $produk = Produk::find($id);
        $produk->nm_produk = $request->nm_produk;
        $produk->harga_satuan = $request->harga_satuan;
        $produk->stok = $request->stok;
        $produk->save();

        return redirect('/produk');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('/produk');
    }
}
