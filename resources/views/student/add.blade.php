@extends('layouts.app')

@section('titulo', 'Agregar estudiante')

@section('contenido')

<div class="alert alert-success mt-5 text-center" role="alert">

    <p clas="text-center"><b>La información del estudiante se ha agregado exitosamente</b></p>

</div>
<a href="/student" class="btn btn-success">Volver a la lista de estudiantes</a>

@endsection
