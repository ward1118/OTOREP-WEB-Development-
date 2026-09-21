@extends('layouts.master')

@section('title', 'Login - Otorep')

@section('content')
    
    <h2>LOGIN</h2>
    <label for="username">EMAIL / USERNAME</label>
    <input type="email" id="username" name="username" required>
    <label for="password">PASSWORD</label>
    <input type="password" id="password" name="password" required>
    <div class="button-container">
        <a href="/dashboard">
            <button type="submit">LOGIN</button>
        </a>
        <a href="/forgot_password">
            <button type="submit">FORGOT PASSWORD</button>
        </a>
    </div>
    <p>DON'T HAVE AN ACCOUNT YET?<br>
    <a href="/register">SIGN UP NOW</a></p>

@endsection