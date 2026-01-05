@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Kegiatan</div>

        <div class="card-body">
            <form action="{{ route('kegiatans.update', $kegiatan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="{{ $kegiatan->tanggal }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $kegiatan->deskripsi }}</textarea>
                </div>

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
