@extends('layouts.master')

@section('body')

<div class="dash_con">
    <div id="sidebar">
        <img src="{{ asset('assets/otorep_logo_text.png') }}" alt="Logo" class="logo"
            style="width: 200px; height: auto; margin: 40px;">
        <a href="/dashboard">
            <button class="sidebar-btn" type="submit">
                <img src="{{ asset('assets/home.png') }}" alt="Dashboard" class="btn-logo">
                Dashboard
            </button>
        </a>
        <a href="/devices">
            <button class="sidebar-btn" type="submit">
                <img src="{{ asset('assets/device.png') }}" alt="Devices" class="btn-logo">
                Devices
            </button>
        </a>
    </div>
        <div id="content">
            <div id="header">
                <div id="header-text">
                    <h1>DASHBOARD</h1>
                    <h3 style="margin: 0px;">Computer Laboratory Monitoring</h3>
                </div>
                <button
                    class="profile_btn"
                    popovertarget="profile_menu"
                    style="
                        justify-self: end;
                        align-self: flex-start;
                        margin-top: 10px;">
                    <img src="{{ asset('assets/profile.png') }}" alt="profile" id="profile"
                        style="
                        width: 50px;
                        height: 50px;">
                </button>
                <div id="profile_menu" popover class="profile_menu">
                    <h3>{{ auth()->user()->username }}</h3>
                    <p>{{ auth()->user()->email }}</p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="logout_button">
                            LOG OUT
                        </button>
                    </form>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

@endsection