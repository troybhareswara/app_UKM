@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Tambah Mahasiswa</div>
        <div class="card-body">
            <form action="{{ route('mahasiswas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="NIM">
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: black; border-color: black;">Simpan</button>
                <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection