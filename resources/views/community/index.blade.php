@extends('layouts.app')

@section('template_title')
<div>
    Comunidad
</div>
@endsection

@section('content')
<style>
    .crud-container {
    display: flex;
    justify-content: center;
    width: 95%;
    height: 100%;
    background-color: rgb(175, 134, 214);
    border: 5px rgb(93, 211, 99) solid;
    padding: 10px;
    margin: 10px auto;
}

#r {
    align-self: center;
    margin: 10px auto;
    padding: 10px;
    color: rgb(86, 128, 24);
    border: 2px green solid;
    border-radius: 10px;
    background-color: greenyellow;
}

.back {
    flex-direction: row;
    display: flex;
    justify-content: center;
}

.table-responsive {
    width: 100%;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.thead th {
    border-bottom: 2px solid #ddd;
    text-align: left;
    padding: 8px;
}

tbody tr {
    border-bottom: 1px solid #ddd;
}

tbody tr td {
    padding: 8px;
}

.btn {
    padding: 5px 10px;
    margin: 2px;
}

[data-color="c"]{
    background-color: rgb(62, 233, 10);
}

[data-color="s"]{
    background-color: rgb(111, 111, 216);
}

[data-color="e"]{
    background-color: rgb(235, 142, 66);
    margin: 0px auto;
}

[data-color="d"]{
    background-color: rgb(235, 65, 65);
}

.texto-botton{
    margin: 1px auto;
}

.span-title{
    color: white;
    display: flex; 
    justify-content: center; 
    width: 100%;
}


#card_title{
    display: flex;
    align-self: center;
    font-size: 20px;
    font-weight: bold;
    margin: 5px auto;
}

.btn-primary, .btn-success, .btn-danger {
    width: 100%;
    padding: 5px;
    display: flex;
    border-radius: 10px;
    border: 2px rgb(22, 22, 22) solid;
    
}


@media (max-width: 768px) {
    .table th:nth-child(1),
    .table td:nth-child(1) {
        display: none;
    }

    .btn {
        display: block;
        width: 100%;
        margin-bottom: 5px;
    }

    .btn-primary, .btn-success, .btn-danger {
    }
}

</style>
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
