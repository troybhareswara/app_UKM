@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Data Mahasiswa</span>
                    {{-- Tombol Tambah hanya untuk Admin --}}
                    @if(Auth::user()->role == 'admin')
                        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary btn-sm"style="background-color: black; border-color: black;">Tambah Mahasiswa</a>
                    @endif
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                @if(Auth::user()->role == 'admin')
                                    <th width="280px">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mhs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->jurusan }}</td>
                                @if(Auth::user()->role == 'admin')
                                    <td>
                                        <form action="{{ route('mahasiswas.destroy',$mhs->id) }}" method="POST">
                                            <a class="btn btn-info btn-sm" href="{{ route('mahasiswas.edit',$mhs->id) }}">Edit</a>
                                            
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    {{-- Pagination --}}
                    {{ $mahasiswas->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection