@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Form Edit Data Produk</div>

                <div class="card-body">
                        <form method="post" action="/produk/{{$produk->id}}">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                            <input type="text" value="{{$produk->nm_produk}}" name="nm_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga Satuan</label>
                            <input type="text" value="{{$produk->harga_satuan}}" name="harga_satuan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Stok</label>
                            <input type="number" value="{{$produk->stok}}" name="stok" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection