@extends('layouts.app')

@section('template_title')
    Service
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles-crud.css') }}">
    <div class="back">
        <a href="{{ route('home') }}" id="r">Regresar</a>
    </div>
    <div class="crud-container">
        <div>
            <div class="span-title">
                <span id="card_title">
                    Servicios
                </span>
            </div>
            <div>
                
                <div>
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="float-right">
                                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left" style="background-color: rgb(33, 226, 33)">
                                {{ __('Crear Servicio') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->name }}</td>
                                            <td>
                                                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                                    <a data-color="s" class="btn btn-sm btn-primary" href="{{ route('services.show', $service->id) }}"> <h3 class="texto-botton">Mostrar</h3></a>
                                                    <a data-color="e" class="btn btn-sm btn-success" href="{{ route('services.edit', $service->id) }}"> <h3 class="texto-botton">Editar</h3></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-color="d" class="btn btn-danger btn-sm"> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $services->links() !!}
            </div>
        </div>
    </div>
@endsection
