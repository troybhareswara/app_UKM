@extends('layouts.dashboard')

@section('content')
<h2>Data Kegiatan</h2>

<a href="{{ route('kegiatan.create') }}">+ Tambah Kegiatan</a>

<ul>
@foreach ($kegiatans as $k)
    <li>
        <b>{{ $k->nama_kegiatan }}</b><br>
        {{ $k->tanggal }}<br>
        {{ $k->deskripsi }}
    </li>
@endforeach
</ul>
@endsection
