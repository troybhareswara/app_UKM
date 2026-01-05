@extends('layouts.auth')

@section('content')
    <div class="auth-title">Login</div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            value="{{ old('email') }}"
            required
            autofocus
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="remember">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        </div>

        <button type="submit">Login</button>
    </form>
            <footer style="margin-top: 50px; padding: 20px 0; border-top: 1px solid #eee; font-size: 0.8rem; color: #888;">
            &copy; Teknologi Informasi Undiknas 2026. All rights reserved.
        </footer>
@endsection
