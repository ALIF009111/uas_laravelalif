@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Form Edit Data Pesanan</div>

                <div class="card-body">
                        <form method="post" action="/pesanan/{{$pesanan->id}}">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pesanan</label>
                            <input type="text" value="{{$pesanan->nm_pesanan}}" name="nm_pesanan" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                            <select name="pelanggan" id="" class="form-control">
                                <option value="pelanggan">-Pilih Nama Pelanggan-</option>
                                @foreach ($pelanggan as $p)
                                    <option {{$pesanan->pelanggans_id == $p->id ? 'selected' :''}} value="{{$p->id}}">{{$p->nm_pelanggan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                            <select name="produk" id="" class="form-control">
                                <option value="produk">-Pilih Nama Produk-</option>
                                @foreach ($produk as $p2)
                                    <option {{$pesanan->produks_id == $p2->id ? 'selected' :''}} value="{{$p2->id}}">{{$p2->nm_produk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                            <input type="text" value="{{$pesanan->jumlah}}" name="jumlah" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total Harga</label>
                            <input type="number" value="{{$pesanan->total_harga}}" name="total_harga" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pesanan</label>
                            <input type="text" value="{{$pesanan->tgl_pesanan}}" name="tgl_pesanan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pengambilan</label>
                            <input type="text" value="{{$pesanan->tgl_pengambilan}}" name="tgl_pengambilan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Status Pemesanan</label>
                            <input type="text" value="{{$pesanan->status_pemesanan}}" name="status_pemesanan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection