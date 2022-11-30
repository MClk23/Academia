@extends('layouts.app')

@section('titulo', 'Estudiante Actualizado')

@section('contenido')


<div class="alert alert-info" role="alert">
    La información del estudiante ha sido actualizada exitosamente
</div>
<a href="/student" class="btn btn-success">Volver a la lista de estudiantes</a>
@endsection
