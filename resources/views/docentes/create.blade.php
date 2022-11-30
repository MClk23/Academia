@extends('layouts.app')

@section('titulo', 'Crear Docentes')
@section('contenido')

    <form action="/docentes" method="POST" enctype="multipart/form-data">

    @csrf
    @if ($errors->any())

        @foreach ($errors->all() as $alerta)

        <div class="alert alert-danger" role="alert">
            <ul>
            <li>{{$alerta}}</li>
            </ul>
        </div>

        @endforeach

    @endif

    <br>
        <h2>Aquí puedes inscribirte como docente</h2>
        <div class="form-group">
            <label for="nombre">Nombres del docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label for="apellido">Apellidos del Docente</label>
            <input id="apellido" class="form-control" type="text" name="apellido">
        </div>

        <div class="form-group">
            <label for="titulouniv">Título Universitario</label>
            <input id="titulouniv" class="form-control" type="text" name="titulouniv">
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input id="edad" class="form-control" type="text" name="edad">
        </div>

        <div class="form-group">
            <label for="fecha">Fecha del contrato</label>
            <input id="fecha" class="form-control" type="date" name="fecha">
        </div>

        <div class="form-group">
            <label for="documento">Documento de identidad</label>
            <input id="documento" class="form-control" type="file" name="documento">
        </div>

        <div class="form-group">
            <label for="imagen" class="form-label">Cargue la foto del docente</label>
            <br>
            <input id="imagen" class="form-control" type="file" name="imagen">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Cursos</label>
            <select class="form-control" name="id_curso" id="exampleFormControlSelect1">
                <option>Seleccionar</option>
                @foreach ($cursito as $grado)
                <option value="{{$grado->id}}">{{$grado->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-info" type="submit">Crear Docente</button>
        <a href="/docentes" class="btn btn-danger">Volver a la lista de docentes</a>

    </div>

</form>

@endsection
