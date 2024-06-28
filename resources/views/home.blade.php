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

    <div class="datatable-container">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <!-- Añade las columnas necesarias -->
                </tr>
            </thead>
            <tbody>
                <!-- Añade filas según tu modelo de datos -->
                <tr>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <!-- Ejemplo de datos, ajusta según tu aplicación -->
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    {{-- Incluir estilos de DataTables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
     {{-- Add here extra stylesheets --}}
     <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
     <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
@stop

@section('js')
    {{-- Incluir scripts de DataTables y otros --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    
    {{-- Script de DataTables --}}
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
