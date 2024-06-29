@extends('adminlte::page')

@section('title', 'Encuestas de Empleados')

@section('content_header')
    <h1>Encuestas de Empleados</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Encuestas de Empleados') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('employee-ratings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Crear Nueva') }}
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
                        <table id="employeeRatingsTable" class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Empleado de Servicio</th>
                                    <th>Empleado de Mostrador</th>
                                    <th>Cliente</th>
                                    <th>Calificación de Servicio</th>
                                    <th>Calificación de Mostrador</th>
                                    <th>Feedback de Servicio</th>
                                    <th>Feedback de Mostrador</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employeeRatings as $employeeRating)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $employeeRating->service_employee_id }}</td>
                                        <td>{{ $employeeRating->counter_employee_id }}</td>
                                        <td>{{ $employeeRating->customer_id }}</td>
                                        <td>{{ $employeeRating->service_rating }}</td>
                                        <td>{{ $employeeRating->counter_rating }}</td>
                                        <td>{{ $employeeRating->service_feedback }}</td>
                                        <td>{{ $employeeRating->counter_feedback }}</td>
                                        <td>
                                            <form action="{{ route('employee-ratings.destroy',$employeeRating->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('employee-ratings.show',$employeeRating->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('employee-ratings.edit',$employeeRating->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $employeeRatings->links() !!}
        </div>
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    {{-- Incluir scripts de DataTables y otros --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    
    {{-- Script de DataTables --}}
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    {{-- Inicializar DataTable --}}
    <script>
        $(document).ready(function() {
            $('#employeeRatingsTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });
        });
    </script>
@stop
