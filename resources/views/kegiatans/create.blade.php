@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Tambah Kegiatan</div>

        <div class="card-body">
            <form action="{{ route('kegiatans.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
