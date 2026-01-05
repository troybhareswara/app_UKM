<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Dashboard | UKM</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background: #f5f5f5;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background: #111;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .sidebar a {
            color: #ccc;
            text-decoration: none;
            padding: 10px;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: #222;
            color: #fff;
        }

        .content {
            flex: 1;
            padding: 30px;
            background: #fff;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .dashboard-cards .card {
            background: #111;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .sidebar-logo {
            font-size: 26px;
            color: #fff;
            margin-bottom: 25px;
            cursor: pointer;
            user-select: none;
        }
        .kegiatan-card {
        text-decoration: none;
         color: inherit;
        }



    </style>
</head>
<body>

<div class="layout">
    <aside class="sidebar">
        <div class="sidebar-logo">☰</div>


        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('mahasiswas.index') }}">🎓 Mahasiswa</a>

        @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('mahasiswas.create') }}">➕ Tambah Mahasiswa</a>
        @endif


        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button style="margin-top:20px">Logout</button>
        </form>
    </aside>

    <main class="content">
        @yield('content')
    </main>
</div>

</body>
</html>
