<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #b0b0b0);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', Arial, sans-serif;
        }

        .auth-card {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,.2);
            text-align: center;
        }

        .auth-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 24px;
            color: #222;
        }

        .auth-card form {
            text-align: left;
        }

        .auth-card input[type="email"],
        .auth-card input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 16px;
            font-size: 15px;
        }

        .auth-card input:focus {
            outline: none;
            border-color: #007bff;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .auth-card button {
            width: 100%;
            padding: 12px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .auth-card button:hover {
            background: #222;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="auth-card">
    

    @yield('content')
</div>

</body>
</html>
