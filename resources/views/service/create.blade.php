@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Service
@endsection

@section('content')
<style>
    /* General container styling */
    .content.container-fluid {
        padding: 20px;
    }

    .row {
        display: flex;
        justify-content: center;
        padding: 0 10px;
    }

    .col-md-12 {
        max-width: 100%;
        padding: 0;
    }

    .card {
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    /* Header styling */
    .card-header {
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Form styling */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn-submit {
        display: block;
        width: 100%;
        color: #fff;
        padding: 10px;
        background-color: rgb(116, 238, 60);
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .btn-submit:hover {
        background-color: rgb(100, 205, 52);
    }

    #cancelar {
        background-color: #e64343;
        display: flex;
        justify-content: center;
    }

    /* Mobile specific styling */
    @media (max-width: 768px) {
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: normal;
        }

        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} un Nuevo Servicio</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('services.store') }}" role="form" enctype="multipart/form-data" class="form">
                            @csrf

                            @include('service.form')

                            <button type="submit" class="btn btn-submit">{{ __('Crear') }}</button>
                            <a href="{{ route('services.index') }}" class="btn btn-submit" id="cancelar">{{ __('Cancelar') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
