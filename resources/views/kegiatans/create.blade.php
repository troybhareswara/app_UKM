@extends('layouts.dashboard')

@section('content')
<h2>Tambah Kegiatan</h2>

<form method="POST" action="{{ route('kegiatan.store') }}">
@csrf

<label>Nama Kegiatan</label><br>
<input type="text" name="nama_kegiatan"><br><br>

<label>Tanggal</label><br>
<input type="date" name="tanggal"><br><br>

<label>Deskripsi</label><br>
<textarea name="deskripsi"></textarea><br><br>

<button type="submit">Simpan</button>
</form>
@endsection
