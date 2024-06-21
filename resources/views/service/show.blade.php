@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? __('Show') . " " . __('Service') }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles-show.css') }}">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-flex">
                        <div class="header-title">
                            <span class="card-title">{{ __('Mostrar') }} Servicio</span>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2">
                            <strong>Nombre:</strong>
                            {{ $service->name }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Descripción:</strong>
                            {{ $service->description }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Estado:</strong>
                            {{ $service->status }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Foto:</strong>
                            {{ $service->photo }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Porcentaje de descuento:</strong>
                            {{ $service->discount_percentage }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Inicio de promoción:</strong>
                            {{ $service->date_one }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Fin de promoción:</strong>
                            {{ $service->date_two }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Razón:</strong>
                            {{ $service->reason }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Funcion:</strong>
                            {{ $service->function }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Complemento:</strong>
                            {{ $service->complement }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Posibles efectos:</strong>
                            {{ $service->effects }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Proceso:</strong>
                            {{ $service->procces }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Objetivo:</strong>
                            {{ $service->goal }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Duración:</strong>
                            {{ $service->duration }}
                        </div>
                        <div class="card-header header-flex">
                            <div class="header-action">
                                <a class="btn btn-primary btn-sm" href="{{ route('services.index') }}"> {{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
