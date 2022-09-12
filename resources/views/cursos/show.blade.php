@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
<div>
    <div class="text-center">
        <img style="height: 300px; width:550px;" class="card-img-top" src="{{ Storage::url($cursito->imagen) }} " alt="Card image cap">
        <p>Descripción: {{$cursito->descripcion}}</p>
        <p>Duración: {{$cursito->duracion}}</p>
        <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-success">Editar</a>

        <br>
        <br>
        {{--Para este caso no se necesita escribir destroy en la ruta como si escribimos edit
            en la ruta para obtener el formulario de edición. Aquí creamos un formulario
            simplemente para poder incluir el botón para eliminar--}}
        <form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">--Eliminar--</button>
        </form>

    </div>
    
</div>

@endsection
