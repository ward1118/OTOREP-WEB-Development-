@extends('layouts.master')

@section('title', 'Sign Up - Otorep')

@section('content')

    <div class="card">
        <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
                    style="width: 250px; height: auto;">
        <h2>CREATE NEW ACCOUNT</h2>
        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form
            method="POST"
            action="{{ route('auth.register') }}">
            @csrf
            <label for="username">USERNAME</label>
            <input
                type="text"
                id="username"
                name="username"
                placeholder="Username"
                value="{{ old('username') }}"
                required>

            <label for="email">EMAIL</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                required>

            <label for="password">PASSWORD</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Password"
                required>

            <label for="password_confirmation">CONFIRM PASSWORD</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Confirm Password"
                required>
                
            <div class="button-container">
                <button type="submit">SIGN UP</button>
            </div>
        </form>
        <p>ALREADY REGISTERED?<br>
        <a href="/">LOGIN</a></p>
    </div>

@endsection