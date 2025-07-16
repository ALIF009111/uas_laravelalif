@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Form Edit Data Pembayaran</div>

                <div class="card-body">
                        <form method="post" action="/pembayaran/{{$pembayaran->id}}">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pesanan</label>
                            <select name="pesanan" id="" class="form-control">
                                <option value="pesanan">-Pilih Pesanan-</option>
                                @foreach ($pesanan as $p)
                                    <option {{$pembayaran->pesanans_id == $p->id ? 'selected' :''}} value="{{$p->id}}">{{$p->nm_pesanan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                            <input type="text" value="{{$pembayaran->metode_bayar}}" name="metode_bayar" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah Bayar</label>
                            <input type="text" value="{{$pembayaran->jumlah_bayar}}" name="jumlah_bayar" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Total Tagihan</label>
                            <input type="number" value="{{$pembayaran->total_tagihan}}" name="total_tagihan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kembalian</label>
                            <input type="text" value="{{$pembayaran->kembalian}}" name="kembalian" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection