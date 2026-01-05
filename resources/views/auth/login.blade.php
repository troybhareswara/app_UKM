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
@endsection
