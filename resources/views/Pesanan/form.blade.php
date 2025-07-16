@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">Form Tambah Pesanan</div>

                <div class="card-body">
                    <form method="post" action="/pesanan" enctype="multipart/form-data">
                     @csrf<div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pesanan</label>
                            <input type="text" name="nm_pesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                            <select name="pelanggan" id="" class="form-control">
                                <option value="">-Pilih Pelanggan-</option>
                                @foreach ($pelanggan as $p)
                                    <option value="{{$p->id}}">{{$p->nm_pelanggan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                            <select name="produk" id="" class="form-control">
                                <option value="">-Pilih Produk-</option>
                                @foreach ($produk as $p2)
                                    <option value="{{$p2->id}}">{{$p2->nm_produk}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total Harga</label>
                            <input type="number" name="total_harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Pesanan</label>
                            <input type="date" name="tgl_pesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pengambilan</label>
                            <input type="date" name="tgl_pengambilan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Satatus Pemesanan</label>
                            <input type="text" name="status_pemesanan" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection