@extends('layouts.template')

@section('title')
    Halaman Dashboard
@endsection

@section('headline')
    Dashboard
@endsection

@section('content')
   <!-- Bungkus dengan div full-width yang konsisten -->
<div class="px-1 py-1"> <!-- padding kiri-kanan dan atas -->
  <div class="card w-100 shadow-sm rounded-4">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-3">HII ADMIN!!!</h5>
      <p class="mb-0">Halo Admin semangat bekerja hari ini</p>
    </div>
  </div>
</div>

@endsection




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
