@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
<div>
    <div class="text-center">
        <img style="height: 300px; width:550px;" class="card-img-top" src="{{ Storage::url($cursito->imagen) }} " alt="Card image cap">
        <p>Descripción: {{$cursito->descripcion}}</p>
        <p>Duración: {{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar</a>
    </div>
</div>

@endsection
