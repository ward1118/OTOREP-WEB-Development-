@extends('layouts.master')

@section('title', 'Sign Up - Otorep')

@section('content')
    <div class="auth_con">
        <img src="{{ asset('assets/otorep_logo.png') }}" alt="Logo" class="logo"
                    style="
                    width: 300px;
                    height: auto;
                    transform: perspective(1000px) rotateY(15deg)">
        <div class="card">
            <h1>CREATE NEW ACCOUNT</h1>
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
    </div>

@endsection