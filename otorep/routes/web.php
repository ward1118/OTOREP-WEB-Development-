<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/auth/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::get('/auth/register', function () {
    return view('/auth/register');
})->name('register');

Route::post('/auth/register', [AuthController::class, 'register'])
    ->name('auth.register');

Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/devices', function () {
        return view('devices');
    })->name('devices');

});