@extends('layouts.app')

@section('content')
<h2>Data Mahasiswa</h2>

@if(Auth::user()->role == 'admin')
    <a href="{{ route('mahasiswas.create') }}"
       class="btn btn-primary btn-sm"
       style="margin-bottom:15px;background:black;border:black;">
       + Tambah Mahasiswa
    </a>
@endif

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
                <th>Aksi</th>
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
                    <a class="btn btn-info btn-sm"
                       href="{{ route('mahasiswas.edit',$mhs->id) }}">Edit</a>

                    <form action="{{ route('mahasiswas.destroy',$mhs->id) }}"
                          method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin?')">
                            Hapus
                        </button>
                    </form>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

{{ $mahasiswas->links() }}
@endsection
