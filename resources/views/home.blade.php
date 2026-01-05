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

    <div class="card">
        <h3>Kegiatan</h3>
        <p>12</p>
    </div>
</div>
@endsection
