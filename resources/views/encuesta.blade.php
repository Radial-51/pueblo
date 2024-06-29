@extends('adminlte::page')

@section('title', 'Encuesta de Satisfacción')

@section('content_header')
    <h1>Encuesta de Satisfacción</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Por favor, danos tu opinión</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('encuesta.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="service_rating">Calificación del servicio:</label>
                            <select class="form-control" id="service_rating" name="service_rating">
                                <option value="1">1 - Muy insatisfecho</option>
                                <option value="2">2 - Insatisfecho</option>
                                <option value="3">3 - Neutral</option>
                                <option value="4">4 - Satisfecho</option>
                                <option value="5">5 - Muy satisfecho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="counter_rating">Calificación del empleado de mostrador:</label>
                            <select class="form-control" id="counter_rating" name="counter_rating">
                                <option value="1">1 - Muy insatisfecho</option>
                                <option value="2">2 - Insatisfecho</option>
                                <option value="3">3 - Neutral</option>
                                <option value="4">4 - Satisfecho</option>
                                <option value="5">5 - Muy satisfecho</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="service_feedback">Comentarios adicionales sobre el servicio:</label>
                            <textarea class="form-control" id="service_feedback" name="service_feedback" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="counter_feedback">Comentarios adicionales sobre el empleado de mostrador:</label>
                            <textarea class="form-control" id="counter_feedback" name="counter_feedback" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Encuesta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    {{-- Incluir estilos de SweetAlert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8">
@stop

@section('js')
    {{-- Incluir script de SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    {{-- Script para mostrar alerta después de enviar la encuesta --}}
    @if(session('success'))
        <script>
            Swal.fire({
                title: '¡Encuesta enviada!',
                text: '{{ session('success') }}',
                type: 'success',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
@stop
