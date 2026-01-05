<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background: linear-gradient(135deg, #000000, #434343);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .auth-card {
            background: #fff;
            padding: 40px;
            width: 380px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.3);
        }

        .auth-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .auth-logo img {
            width: 90px;
        }
    </style>
</head>
<body>

    <div class="auth-card">
        <div class="auth-logo">
            <img src="{{ asset('logo.png') }}" alt="Logo">
        </div>

        @yield('content')
    </div>

</body>
</html>
