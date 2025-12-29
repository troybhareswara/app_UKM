@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Mahasiswa</div>
        <div class="card-body">
            <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection