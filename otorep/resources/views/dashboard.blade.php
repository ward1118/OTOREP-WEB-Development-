@extends('layouts.master')

@section('title', 'Dashboard - Otorep')

@section('content')
    
    <div class="dash_con">
        <div id="sidebar">
            <p>(sidebar)</p>
        </div>
        <div id="content">
            <div id="header">
                <h1 style="margin: 0px;">ADD DEVICE</h1>
                <h3 style="margin: 0px;">Computer Laboratory Monitoring</h3>
            </div>
            <div class="status_card">
                <p>Total Computers</p>
            </div>
            <div class="status_card">
                <p>Working Properly</p>
            </div>
            <div class="status_card">
                <p>Needs Attention</p>
            </div>
            <div class="status_card">
                <p>Under Repair</p>
            </div>
            <div id="equipment">
                <p>Recent Notifications</p>
            </div>
        </div>
    </div>

@endsection