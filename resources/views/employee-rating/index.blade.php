@extends('adminlte::page')

@section('title', 'Encuestas de Empleados')

@section('content_header')
    <h1>Encuestas de Calificación de Empleados</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Encuestas de Calificación</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success" id="createSurveyBtn">
                            <i class="fas fa-plus"></i> Crear Nueva Encuesta
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="surveyTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Empleado Servicio</th>
                                <th>ID Empleado Mostrador</th>
                                <th>ID Cliente</th>
                                <th>Calificación Servicio</th>
                                <th>Calificación Mostrador</th>
                                <th>Fecha de Creación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surveys as $survey)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $survey->service_employee_id }}</td>
                                    <td>{{ $survey->counter_employee_id }}</td>
                                    <td>{{ $survey->customer_id }}</td>
                                    <td>{{ $survey->service_rating }}</td>
                                    <td>{{ $survey->counter_rating }}</td>
                                    <td>{{ $survey->created_at }}</td>
                                    <td>
                                        <a href="{{ route('employee-ratings.show', $survey->id) }}" class="btn btn-sm btn-info">Ver</a>
                                        <a href="{{ route('employee-ratings.edit', $survey->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('employee-ratings.destroy', $survey->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for creating survey -->
<div class="modal fade" id="surveyModal" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="surveyForm" action="{{ route('employee-ratings.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="surveyModalLabel">Crear Nueva Encuesta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="service_employee_id">ID Empleado Servicio</label>
                        <input type="text" name="service_employee_id" id="service_employee_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="counter_employee_id">ID Empleado Mostrador</label>
                        <input type="text" name="counter_employee_id" id="counter_employee_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_id">ID Cliente</label>
                        <input type="text" name="customer_id" id="customer_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="service_rating">Calificación Servicio</label>
                        <input type="number" name="service_rating" id="service_rating" class="form-control" required min="1" max="5">
                    </div>
                    <div class="form-group">
                        <label for="counter_rating">Calificación Mostrador</label>
                        <input type="number" name="counter_rating" id="counter_rating" class="form-control" required min="1" max="5">
                    </div>
                    <div class="form-group">
                        <label for="service_feedback">Comentarios Servicio</label>
                        <textarea name="service_feedback" id="service_feedback" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="counter_feedback">Comentarios Mostrador</label>
                        <textarea name="counter_feedback" id="counter_feedback" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Encuesta</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@8.0.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
@stop

@section('js')
    {{-- Add here extra scripts --}}
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8.0.0/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#surveyTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                }
            });

            $('#createSurveyBtn').click(function() {
                $('#surveyModal').modal('show');
            });

            @if (Session::has('success'))
                Swal.fire({
                    title: 'Éxito!',
                    text: "{{ Session::get('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
@stop
