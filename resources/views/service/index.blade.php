@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Tabla de servicios</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Service') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="datatable">
                            <thead class="thead">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Foto</th>
                                    <th>Porcentaje Descuento</th>
                                    <th>Inicio Dinámica</th>
                                    <th>Fin Dinámica</th>
                                    <th>Razón</th>
                                    <th>Función</th>
                                    <th>Complementos</th>
                                    <th>Posibles efectos</th>
                                    <th>Proceso</th>
                                    <th>Objetivo</th>
                                    <th>Duración</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('services.show', $service->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('services.edit', $service->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $service->status }}</td>
                                        <td>{{ $service->photo }}</td>
                                        <td>{{ $service->discount_percentage }}</td>
                                        <td>{{ $service->date_one }}</td>
                                        <td>{{ $service->date_two }}</td>
                                        <td>{{ $service->reason }}</td>
                                        <td>{{ $service->function }}</td>
                                        <td>{{ $service->complement }}</td>
                                        <td>{{ $service->effects }}</td>
                                        <td>{{ $service->process }}</td>
                                        <td>{{ $service->goal }}</td>
                                        <td>{{ $service->duration }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Estilos adicionales --}}
    <link rel="stylesheet" href="{{ secure_asset('css/styles-crud.css') }}">
    {{-- Estilos de DataTables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    {{-- Estilos de AdminLTE --}}
    <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    {{-- Otros estilos personalizados --}}
    <link rel="stylesheet" href="{{ secure_asset('css/styles-home.css') }}">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    {{-- Scripts de DataTables y otros --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    {{-- Scripts de DataTables --}}
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@stop
