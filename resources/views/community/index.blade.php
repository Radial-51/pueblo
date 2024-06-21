@extends('layouts.app')

@section('template_title')
<div>
    Comunidad
</div>
@endsection

@section('content')
<link rel="stylesheet" href="{{ secure_asset('css/styles-crud-c.css')}}">
<div class="back">
        <a href="{{ route('home') }}" id="r">Regresar</a>
    </div>
    <div class="crud-container">
        <div>
            <div class="span-title">
                <span id="card_title">
                    Servicio a la Comunidad
                </span>
            </div>
            
            <div>
                <div>
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="float-right">
                                <a href="{{ route('communities.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left" style="background-color: rgb(33, 226, 33)">
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
                                        <th>No</th>
                                        <th>Beneficiary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($communities as $community)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $community->beneficiary }}</td>

                                            <td>
                                                <form action="{{ route('communities.destroy',$community->id) }}" method="POST">
                                                    <a data-color="s"class="btn btn-sm btn-primary " href="{{ route('communities.show',$community->id) }}"><h3 class="texto-botton">Mostrar</h3></a>
                                                    <a data-color="e" class="btn btn-sm btn-success" href="{{ route('communities.edit',$community->id) }}"><h3 class="texto-botton">Editar</h3></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-color="d" type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $communities->links() !!}
            </div>
        </div>
    </div>
@endsection
