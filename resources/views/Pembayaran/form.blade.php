@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">Form Tambah Pembayaran</div>

                <div class="card-body">
                    <form method="post" action="/pembayaran" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pesanan</label>
                            <select name="pesanan" id="" class="form-control">
                                <option value="pesanan">-Pilih Pesanan-</option>
                                @foreach ($pesanan as $p)
                                    <option value="{{$p->id}}">{{$p->nm_pesanan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                            <input type="text" name="metode_bayar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Bayar</label>
                            <input type="text" name="jumlah_bayar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total Tagihan</label>
                            <input type="text" name="total_tagihan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kembalian</label>
                            <input type="text" name="kembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection