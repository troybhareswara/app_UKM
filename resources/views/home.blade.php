@extends('layouts.app')

@section('content')
<h1>UNDIKNAS BADMINTON</h1>
<p>Selamat datang, {{ Auth::user()->name }}</p>

<div class="dashboard-cards">
    <a href="https://pbsi.id/kejuaraan/" class="kegiatan-card" target="_blank" rel="noopener noreferrer">
    <div class="card">
        <h5>Kegiatan UKM</h5>
        <p>Lihat Daftar Perlombaan Badminton</p>
    </div>
    </a>

</div>
@endsection
