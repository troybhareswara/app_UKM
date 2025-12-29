@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body text-center"> {{-- Saya tambah text-center agar rapi di tengah --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    {{-- --- TOMBOL LINK DITAMBAHKAN DI SINI --- --}}
                    <div class="mt-4">
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">
                            Lihat Data Mahasiswa
                        </a>
                    </div>
                    {{-- --------------------------------------- --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection