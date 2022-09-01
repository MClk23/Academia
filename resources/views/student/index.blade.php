@extends('layouts.app')

@section('titulo', 'Lista estudiante')

@section('contenido')

<h2>Listado de estudiantes</h2>

    <div class="row">
        @foreach ($studentsito as $item)
                <div class="col-sm">
                    <div class="card text-center m-3" style="width: 18rem;">
                        <img style="height: 150px" class="card-img-top" src="{{ Storage::url($item->docident) }}
                        " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nombre}}</h5>
                            <a href="/student/{{$item->id}}" class="btn btn-primary">Ver Detalles del docente</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>


@endsection
