<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Loading...</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #ffffff;
            font-family: Arial, sans-serif;
        }

        .loader {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .loader img {
            width: 120px;
            margin-bottom: 20px;
        }

        .loader p {
            font-size: 14px;
            color: #555;
            letter-spacing: 1px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="loader">
        {{-- GANTI LOGO SESUAI PUNYA KAMU --}}
        <img src="{{ asset('logo.png') }}" alt="Logo UKM">
        <p>Loading...</p>
    </div>

    <script>
        setTimeout(() => {
            window.location.href = "{{ route('redirect.after.loading') }}";
        }, 2000);
    </script>

</body>
</html>
