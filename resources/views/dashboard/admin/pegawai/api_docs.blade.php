@extends('dashboard.admin.layouts.main')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1, h2, h3 {
            color: #444;
        }
        h2 {
            margin-top: 2em;
        }
        h3 {
            margin-top: 1em;
            font-size: 1.2em;
        }
        p, ul {
            color: #666;
            line-height: 1.6;
        }
        code {
            font-family: monospace;
            background-color: #f9f9f9;
            padding: 2px 4px;
            border-radius: 3px;
        }
        .endpoint {
            background-color: #f9f9f9;
            padding: 1em;
            border-radius: 3px;
            margin-bottom: 1em;
        }
    </style>
    <!--  Header Start -->
    @include('dashboard.admin.layouts.navbar')
    <!--  Header End -->
    <div class="container-fluid">
        <h1>API Documentation</h1>
        <h2>Endpoints</h2>
        <div class="endpoint">
            <h3>GET /api/pegawai</h3>
            <p>Returns a list of all pegawai.</p>
        </div>
        <div class="endpoint">
            <h3>GET /api/pegawai/{id}</h3>
            <p>Returns a specific pegawai by their ID.</p>
        </div>
        <!-- Add more endpoints as needed -->
    </div>
@endsection
