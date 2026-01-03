<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('UKM', 'Unit Kegiatan Mahasiswa') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* --- 1. RESET & VARIABEL --- */
        :root {
            --bg-color: #ffffff;
            --text-main: #222222;
            --text-secondary: #666666;
            --accent-color: #000000;
            --light-gray: #f4f4f4;
            --font-main: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-main);
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            padding: 0 20px;
        }

        /* Container umum untuk membungkus konten agar rapi di tengah */
        .app-container { max-width: 1100px; margin: 0 auto; }

        /* --- 2. HEADER & NAVIGATION (DIPERBARUI) --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
            flex-wrap: wrap;
            gap: 20px;
            border-bottom: 1px solid #eee; /* Opsional: pemisah tipis */
            margin-bottom: 40px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            text-decoration: none;
            color: var(--text-main);
            margin-right: auto;
        }

        /* Navigasi Link (Tengah) */
        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin-right: 40px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        nav a:hover { color: var(--accent-color); }

        /* Area Tombol Auth (Login/Register/User) */
        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Gaya Tombol Login */
        .btn-login {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Gaya Tombol Register */
        .btn-register {
            background-color: var(--accent-color);
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 4px;
            transition: opacity 0.3s ease;
        }

        .btn-register:hover { opacity: 0.8; }
        
        /* Gaya Logout (Sederhana untuk user yang login) */
        .user-greeting {
            font-size: 0.9rem;
            color: var(--text-main);
            font-weight: 600;
        }

        .btn-logout {
            text-decoration: none;
            color: red; /* Sedikit pembeda untuk logout */
            font-size: 0.85rem;
            margin-left: 10px;
        }

        /* --- 3. HERO SECTION (Jika digunakan di halaman home) --- */
        .hero {
            height: 75vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 40px;
            max-width: 500px;
        }

        .btn-hero {
            display: inline-block;
            background-color: var(--accent-color);
            color: #fff;
            padding: 15px 35px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 5px;
        }

        /* --- 4. RESPONSIVE --- */
        @media (max-width: 768px) {
            header { flex-direction: column; align-items: flex-start; }
            .logo { margin-bottom: 10px; }
            nav ul { margin-right: 0; margin-bottom: 20px; width: 100%; justify-content: space-between;}
            .auth-buttons { width: 100%; justify-content: flex-start;}
            .hero h1 { font-size: 2.5rem; }
        }

        
    </style>
</head>
<body>
    <div id="app" class="app-container">
        <header>
            <a href="{{ url('/') }}" class="logo">
                {{ config('UKM', 'Unit Kegiatan Mahasiswa') }}
            </a>

            <nav>
                <ul>
                    </ul>
            </nav>

            <div class="auth-buttons">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn-login">{{ __('Log in') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-register">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="user-greeting">Hi, {{ Auth::user()->name }}</span>
                    
                    <a class="btn-logout" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>