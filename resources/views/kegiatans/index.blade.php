@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span>Data Kegiatan</span>

            @if(Auth::user()->role === 'admin')
                <a href="{{ route('kegiatans.create') }}" class="btn btn-primary btn-sm">
                    Tambah Kegiatan
                </a>
            @endif
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    @if(Auth::user()->role === 'admin')
                        <th>Aksi</th>
                    @endif
                </tr>

                @foreach($kegiatans as $kegiatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kegiatan->nama_kegiatan }}</td>
                    <td>{{ $kegiatan->tanggal }}</td>
                    <td>{{ $kegiatan->deskripsi }}</td>

                    @if(Auth::user()->role === 'admin')
                    <td>
                        <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
