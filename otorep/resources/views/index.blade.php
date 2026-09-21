<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Otorep</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('assets/otorep_logo_only.png') }}">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
                    style="width: 250px; height: auto; margin-bottom: 20px;">
                <label for="username">EMAIL / USERNAME</label>
                <input type="email" id="username" name="username" required>
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" required>
                <div class="button-container">
                    <button type="submit">LOGIN</button>
                    <button type="submit">FORGOT PASSWORD</button>
                </div>
                <p>DON'T HAVE AN ACCOUNT YET?</p>
                <p><a href="register.blade.php">SIGN UP NOW</a></p>
            </div>
        </div>
    </body>
</html>
