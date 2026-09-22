<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/devices', function () {
    return view('devices');
})->name('devices');