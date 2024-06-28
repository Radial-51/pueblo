@extends('adminlte::page')

@section('title', 'Panel de Control')

@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
<div class="main-content">
    <div class="header">
        <h1>Panel de Control</h1>
        <div class="user-info">
            Bienvenido, {{ auth()->user()->name }}
        </div>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Servicios</h3>
            <p>Actualmente hay {{ $serviceCount }} servicios en la base de datos</p>
            <a href="{{ route('services.index') }}" data-type="crud">Abrir Tabla</a>
        </div>
        <div class="card">
            <h3>Servicio Comunitario</h3>
            <p>Actualmente hay {{ $communityServiceCount }} registros en la tabla de servicios comunitarios</p>
            <a href="{{ route('communities.index') }}" data-type="crud">Abrir Tabla</a>
        </div>
        <div class="card">
            <h3>Servicios en Oferta</h3>
            <p>Actualmente hay {{ $offerServiceCount }} servicios en oferta</p>
            <a href="{{ route('offer') }}" data-type="crud">Verlos en la Pagina</a>

        </div>
        <div class="card">
            <h3>Testimonios</h3>
            <p>Algunos datos aquí de la tabla de testimonios</p>
        </div>
    </div>

    <div class="chart">
        <!-- Placeholder for chart (can be implemented with Chart.js or other libraries) -->
        <h2>Citas</h2>
        <p>Los datos de las citas se mostrarán aquí</p>
    </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
@stop

@section('js')
<script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
<link rel="icon" href="{{ secure_asset('favicons/favicon.ico') }}">
@stop
