@extends('layouts.app')

@section('titulo', 'Detalles Docentes')

@section('contenido')

<center>

<h2 class="text-center">Ver Detalles del estudiante</h2>

<br>


<div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h4>Datos de expedición del Estudiante</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><p>Tipo de Documento: {{$studentsito->tipodoc}}</p></li>
                <li class="list-group-item"><p>Documento de identidad: {{$studentsito->numdoc}}</p></li>
                @foreach ($query1 as $consulta)
                    <li class="list-group-item"><p>País de expedición: {{$consulta->nomPais}}</p></li>
                    <li class="list-group-item"><p>Departamento de expedición: {{$consulta->NomDep}}</p></li>
                    <li class="list-group-item"><p>Municipio de expedición: {{$consulta->nomMuni}}</p></li>
                @endforeach
            </ul>


          </div>

      </div>





<br>

<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <h4>Datos de nacimiento del Estudiante</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><p>Nombres del estudiante: {{$studentsito->nombres}}</p></li>
            <li class="list-group-item"><p>Primer apellido del estudiante: {{$studentsito->priapelli}}</p></li>
            <li class="list-group-item"><p>Segundo apellido del estudiante: {{$studentsito->segapellido}}</p></li>
            @foreach ($query2 as $consulta)
                <li class="list-group-item"><p>País de nacimiento: {{$consulta->nomPais}}</p></li>
                <li class="list-group-item"><p>Departamento de nacimiento: {{$consulta->NomDep}}</p></li>
                <li class="list-group-item"><p>Municipio de nacimiento: {{$consulta->nomMuni}}</p></li>
            @endforeach


        </ul>

      </div>

  </div>


</center>
<br>
<center>
        <a href="/student/{{$studentsito->id}}/edit" class="btn btn-success">Editar Docente</a>
        <br>
        <br>
        <form class="form-group" action="/student/{{$studentsito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
</center>





@endsection
