@extends('layouts.master')

@section('title', 'Verify - Otorep')

@section('content')
    
    <h2>FORGOT PASSWORD</h2>
    <label for="username">EMAIL / USERNAME</label>
    <input type="email" id="username" name="username" required>
    <label for="password">PASSWORD</label>
    <input type="password" id="password" name="password" required>
    <div class="button-container">
        <button type="submit">LOGIN</button>
        <button type="submit">FORGOT PASSWORD</button>
    </div>
    <p>DON'T HAVE AN ACCOUNT YET?<br>
    <a href="/register">SIGN UP NOW</a></p>

@endsection