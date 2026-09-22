@extends('layouts.master')

@section('title', 'Sign Up - Otorep')

@section('content')

    <div class="card">
        <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
                    style="width: 250px; height: auto;">
        <h2>CREATE NEW ACCOUNT</h2>
        <label for="username">USERNAME</label>
        <input type="text" id="username" name="username" required>
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" required>
        <label for="password">PASSWORD</label>
        <input type="password" id="password" name="password" required>
        <div class="button-container">
            <button type="submit">SIGN UP</button>
        </div>
        <p>ALREADY REGISTERED?<br>
        <a href="/">LOGIN</a></p>
    </div>

@endsection