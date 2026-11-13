@extends('layouts.master')

@section('title', 'Login - Otorep')

@section('content')
    <div class="auth_con">
        <img src="{{ asset('assets/otorep_logo.png') }}" alt="Logo" class="logo"
                    style="
                    width: 300px;
                    height: auto;
                    transform: perspective(1000px) rotateY(15deg)">
        <div class="card">

            <h1>LOGIN</h1>

            @if(session('error'))
                <p class="error">
                    {{ session('error') }}
                </p>
            @endif
            @if(session('success'))
                <p>   
                    {{ session('success') }}
                </p>
            @endif
            @if($errors->any())
                <div class="error">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('auth.login') }}">

                @csrf
                <label for="login">USERNAME / EMAIL</label>
                <input
                    type="text"
                    id="login"
                    name="login"
                    placeholder="Username or Email"
                    value="{{ old('login') }}"
                    required>

                <label for="password">PASSWORD</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    required>

                <a href="/forgot_password">FORGOT PASSWORD?</a>

                <div class="button-container">
                    <button type="submit">LOGIN</button>
                </div>
                </form>
            <p>DON'T HAVE AN ACCOUNT YET?<br>
            <a href="{{ route('register') }}">SIGN UP NOW</a></p>
        </div>
    </div>

@endsection