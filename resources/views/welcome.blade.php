<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Kegiatan Mahasiswa</title>
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

        .container { max-width: 1100px; margin: 0 auto; }

        /* --- 2. HEADER & NAVIGATION (DIPERBARUI) --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
            flex-wrap: wrap; /* Agar aman di mobile */
            gap: 20px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            text-decoration: none;
            color: var(--text-main);
            margin-right: auto; /* Mendorong elemen lain ke kanan */
        }

        /* Navigasi Link (Tengah) */
        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin-right: 40px; /* Jarak antara menu dan tombol auth */
        }

        nav a {
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        nav a:hover { color: var(--accent-color); }

        /* Area Tombol Auth (Login/Register) */
        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Gaya Tombol Login (Minimalis: Teks saja) */
        .btn-login {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Gaya Tombol Register (Solid) */
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

        /* --- 3. HERO SECTION --- */
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

    <div class="container">
        <header>
            <a href="#" class="logo">Unit Kegiatan Mahasiswa</a>
            
            <nav>
                <ul>

                </ul>
            </nav>

                <div class="auth-buttons">
                    <a href="{{ route('login') }}" class="btn-login">Log in</a>
                    <a href="{{ route('register') }}" class="btn-register">Register</a>
                </div>
        </header>

        <section class="hero">
            <h1>Data Keanggotaan<br>UKM.</h1>
            <p>Tugas yang baik adalah tugas yang selesai.</p>
            <a href="#" class="btn-hero">Jujur, Izinn</a>
        </section>

        <footer style="margin-top: 50px; padding: 20px 0; border-top: 1px solid #eee; font-size: 0.8rem; color: #888;">
            &copy; Teknologi Informasi Undiknas 2025. All rights reserved.
        </footer>
    </div>

</body>
</html>