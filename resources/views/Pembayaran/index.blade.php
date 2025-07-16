@extends('layouts.template')

@section('title')
    Data Pembayaran
@endsection

@section('content')
<div class="card mt-5"> {{-- Tambah jarak ke bawah --}}
    <div class="card-header">
        <h3 class="card-title">
            <a href="/pembayaran/tambah" class="btn btn-primary btn-sm">
                <i class="fa-regular fa-rectangle-list"></i> Tambah Data Pembayaran
            </a>
        </h3>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead >
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Jumlah Bayar</th>
                    <th scope="col">Total Tagihan</th>
                    <th scope="col">Kembalian</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pembayaran as $data)
                    <tr>
                        <th scope="row">{{ $nomor++ }}</th>
                        <td>{{ $data->pesanans->nm_pesanan}}</td>
                        <td>{{ $data->metode_bayar}}</td>
                        <td>{{ $data->jumlah_bayar}}</td>
                        <td>{{ $data->total_tagihan}}</td>
                        <td>{{ $data->kembalian}}</td>
                        <td>

                           <a href="/pembayaran/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>


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
                                            Yakin ingin menghapus Pembayaran <strong>{{ $data->pesanans->nm_pesanan}}</strong>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="/pembayaran/{{ $data->id }}" method="POST" class="d-inline">
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


