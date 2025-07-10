@extends('layouts.template')

@section('title')
    Data Produk
@endsection

@section('content')
<div class="card mt-5"> {{-- Tambah jarak ke bawah --}}
    <div class="card-header">
        <h3 class="card-title">
            <a href="#" class="btn btn-primary btn-sm">
                <i class="fa-regular fa-rectangle-list"></i> Tambah Data Pesanan
            </a>
        </h3>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead >
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Tanggal Pengambilan</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pesanan as $data)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $data->id_pesanan}}</td>
                        <td>{{ $data->id_pelanggan}}</td>
                        <td>{{ $data->id_produk}}</td>
                        <td>{{ $data->jumlah}}</td>
                        <td>{{ $data->total_harga}}</td>
                        <td>{{ $data->tgl_pesanan}}</td>
                        <td>{{ $data->tgl_pengambilan}}</td>
                        <td>{{ $data->status_pemesanan}}</td>
                        <td>

                           <a href="#{{$data->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalDelete{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin ingin menghapus Produk <strong>{{ $data->nm_produk }}</strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="/produk/{{ $data->id }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Data Tidak Ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection