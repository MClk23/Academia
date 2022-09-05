@extends('layouts.app')

@section('titulo', 'Detalles Docentes')

@section('contenido')

<center>
<br>
<h2 class="text-center">Ver Detalles del estudiante</h2>

<br>

@foreach ($query1 as $consulta)
<div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h4>Datos de expedición</h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><p>País de expedición: {{$consulta->nomPais}}</p></li>
              <li class="list-group-item"><p>Departamento de expedición: {{$consulta->NomDep}}</p></li>
              <li class="list-group-item"><p>Municipio de expedición: {{$consulta->nomMuni}}</p></li>
            </ul>

          </div>

      </div>

@endforeach

<a href="/student/{{$studentsito->id}}/edit" class="btn btn-success">Editar Docente</a>

<br>
@foreach ($query2 as $consulta)
<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <h4>Datos de nacimiento</h4>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><p>País de nacimiento: {{$consulta->nomPais}}</p></li>
          <li class="list-group-item"><p>Departamento de nacimiento: {{$consulta->NomDep}}</p></li>
          <li class="list-group-item"><p>Municipio de nacimiento: {{$consulta->nomMuni}}</p>
          </li>
        </ul>
      </div>
  </div>

</center>


@endforeach

@endsection
