@extends('layouts.master')

@section('title', 'Verify - Otorep')

@section('content')
    
    <div class="card">
        <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
                    style="width: 250px; height: auto;">
        <h2>FORGOT PASSWORD?</h2>
        <p>Enter your email below for your verification code.</p>
        <label for="email">EMAIL</label>
        <input type="email" id="email" name="email" required>
        <div class="button-container">
            <button type="submit">SEND CODE</button>
        </div>
        <label for="code">VERIFICATION CODE</label>
        <input type="text" maxlength="4" class="single-code-input">
        <p>HAVEN'T RECEIVED CODE?<br>
        <a href="">RESEND CODE</a></p>
    </div>

@endsection