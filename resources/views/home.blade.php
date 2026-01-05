@extends('layouts.app')

@section('content')
<h2>UKM BADMINTON</h2>
<p>Selamat datang, {{ Auth::user()->name }}</p>

<div class="dashboard-cards">
    <div class="card">
        <h3>Mahasiswa</h3>
        <p>120</p>
    </div>

    <div class="card">
        <h3>UKM</h3>
        <p>5</p>
    </div>

    <a href="https://pbsi.id/kejuaraan/" class="kegiatan-card" target="_blank" rel="noopener noreferrer">
    <div class="card">
        <h3>Kegiatan UKM</h3>
        <p>Lihat daftar perlombaan mahasiswa</p>
    </div>
    </a>

</div>
@endsection
