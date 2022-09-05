@extends('layouts.app')

@section('titulo', 'Lista estudiante')

@section('contenido')

<h2>Listado de estudiantes</h2>

    <div class="row">
        @foreach ($studentsito as $item)
                <div class="col-sm">
                    <div class="card text-center m-3" style="width: 18rem;">
                        <iframe src="{{Storage::url($item->docident)}}" width="300px" height="300px"></iframe>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nombres}}</h5>
                            <a href="/student/{{$item->id}}" class="btn btn-primary">Ver Detalles del estudiante</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>


@endsection
