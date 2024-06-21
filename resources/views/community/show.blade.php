@extends('layouts.app')

@section('template_title')
    {{ $community->name ?? __('Show') . " " . __('Community') }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles-show.css') }}">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-flex">
                        <div class="header-title">
                            <span class="card-title">{{ __('Mostrar') }} Servicio Comunitario</span>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2">
                            <strong>Beneficiario:</strong>
                            {{ $community->beneficiary }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Razón:</strong>
                            {{ $community->reason }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Foto:</strong>
                            {{ $community->photo }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Inicio de Dinámica:</strong>
                            {{ $community->date_one }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Final de Dinámica:</strong>
                            {{ $community->date_two }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Contribución:</strong>
                            {{ $community->gift }}
                        </div>
                        <div class="card-header header-flex">
                            <div class="header-action">
                                <a class="btn btn-primary btn-sm" href="{{ route('communities.index') }}"> {{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
