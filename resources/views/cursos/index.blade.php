@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')

    <h2>Listado de Cursos</h2>

    {{--Foreach sirve para iterar arrays. Es decir permite ciclos en listas--}}
    <div class="row">
        @foreach ($cursito as $item)
                <div class="col-lg">

                    <div class="card text-center m-3" style="width: 15rem;">
                        <img style="height: 170px" class="card-img-top" src="{{ Storage::url($item->imagen) }}
                        " alt="Card image cap">

                        <div class="card-body">
                            <h5 class="card-title">{{$item->nombre}}</h5>
                            <p class="card-title">{{$item->descripcion}}</p>
                            <a href="/cursos/{{$item->id}}" class="btn btn-success">Ver Detalle</a>
                        </div>

                    </div>

                </div>{{--cierre de col--}}
        @endforeach

    </div>{{--cierre de row--}}
    {{--La doble llave sirve par interpolar, es decir, sirve para trear una variable
        de otro lenguaje al lenguaje que se esta usndo actualmente--}}
        <br>
        <a href="/cursos/create" class="btn btn-primary">Crear Curso</a>
@endsection
