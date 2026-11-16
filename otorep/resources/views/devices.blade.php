@extends('layouts.app')

@section('title', 'Devices - Otorep')

@section('content')
    
            <div class="status-card">
                <img src="{{ asset('assets/computer.png') }}" alt="Computer" class="status-logo">
                <p>Total Computers</p>
                <h1 class="status-count">30</h1>
            </div>
            <div class="status-card">
                <img src="{{ asset('assets/good.png') }}" alt="Good" class="status-logo">
                <p>Working Properly</p>
                <h1 class="status-count">24</h1>
            </div>
            <div class="status-card">
                <img src="{{ asset('assets/attention.png') }}" alt="Attention" class="status-logo">
                <p>Needs Attention</p>
                <h1 class="status-count">3</h1>
            </div>
            <div class="status-card">
                <img src="{{ asset('assets/repair.png') }}" alt="Repair" class="status-logo">
                <p>Under Repair</p>
                <h1 class="status-count">0</h1>
            </div>
            <div id="equipment">
                <table>
                    <thead>
                        <th colspan="2">
                            <h3>Recent Notifications</h3>
                        </th>
                        <th>
                            <h3><a href="" style="color: #1f48ff;">View All -></a></h3>
                        </th>
                    </thead>
                    <tr>
                        <td>
                            <h4>PC-01</h4>
                        </td>
                        <td>
                            <h4 class="attention">Needs Attention</h4>
                            <p>Slow Performance</p>
                        </td>
                        <td>
                            <h4>09/22/2026  •  1:00 PM</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>PC-03</h4>
                        </td>
                        <td>
                            <h4 class="maintenance">Under Maintenance</h4>
                            <p>Slow Performance</p>
                        </td>
                        <td>
                            <h4>09/22/2026  •  11:11 AM</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>PC-03</h4>
                        </td>
                        <td>
                            <h4 class="maintenance">Under Maintenance</h4>
                            <p>Slow Performance</p>
                        </td>
                        <td>
                            <h4>09/22/2026  •  11:11 AM</h4>
                        </td>
                    </tr>
                </table>
            </div>
            
@endsection