@extends('layouts.master')

@section('title', 'Login - Otorep')

@section('content')
    
    <div class="card">
        <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
                    style="width: 250px; height: auto;">
        <h2>LOGIN</h2>
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
            <label for="username">USERNAME / EMAIL</label>
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
                
            <div class="button-container">
                <div class="button-container">
                    <button type="submit">LOGIN</button>
                    <a href="/forgot_password">FORGOT PASSWORD</a>
                </div>
            </form> 
        </div>
        <p>DON'T HAVE AN ACCOUNT YET?<br>
        <a href="{{ route('register') }}">SIGN UP NOW</a></p>
    </div>

@endsection