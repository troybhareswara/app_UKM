@extends('layouts.auth')

@section('content')
    <div class="auth-title">Register</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input
            type="text"
            name="name"
            placeholder="Full Name"
            value="{{ old('name') }}"
            required
            autofocus
        >

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            value="{{ old('email') }}"
            required
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

        <input
            type="password"
            name="password_confirmation"
            placeholder="Confirm Password"
            required
        >

        <button type="submit">Register</button>
    </form>

    <div style="
        margin-top: 18px;
        text-align: center;
        font-size: 0.85rem;
    ">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="auth-link">Login</a>
    </div>
@endsection
