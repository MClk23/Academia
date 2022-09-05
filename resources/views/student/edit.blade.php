@extends('layouts.app')

@section('titulo', 'Editar Docentes')

@section('contenido')
<form action="/student/{{$studentsito}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>

<body style="background-color: rgb(236, 233, 233)">


    <div class="container ">
        <div class="row">
          <div class="col-sm">
            <h2>Actualizar Documentos de identidad del estudiante</h2>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de documento</label>
                <select class="form-control" name="tipodoc" id="exampleFormControlSelect1">
                  <option>Cédula de ciudadanía</option>
                  <option>Tarjeta de identidad</option>
                  <option>Pasaporte</option>
                  <option>Extranjería</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">No. de documento</label>
                  <input type="text" class="form-control" name="numdoc" id="exampleFormControlInput1" placeholder="10101010">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Cargar</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="docident" id="inputGroupFile01">
                      <label class="custom-file-label" for="inputGroupFile01">Cargue Doc. de identificación</label>

                    </div>
                  </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">País de expedición</label>
                    <select class="form-control" name="exppais" id="exampleFormControlSelect1">
                        @foreach ($countries as $countri )
                        <option value="">{{$countri->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Departamento donde fue expedido</label>
                    <select class="form-control" name="expdepa" id="exampleFormControlSelect1">
                        @foreach ($states as $stat )
                        <option value="">{{$stat->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Municipio donde fue expedido</label>
                    <select class="form-control" name="id_expmuni" id="exampleFormControlSelect1">
                        @foreach ($towns as $tow )
                        <option value="{{$tow->id}}">{{$tow->nombre}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Fecha de expedición</label>
                    <input type="date" class="form-control" name="fecexp" id="exampleFormControlInput1"  value="<?php date('Y-m-d') ?>">
                  </div>
          </div>
          <div class="col-sm">
            <h2>Actualizar Datos de identificación del estudiante</h2>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Primer apellido</label>
                <input type="text" class="form-control" name="priapelli" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Segundo apellido</label>
                <input type="text" class="form-control" name="segapellido" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Género</label>
                <select class="form-control" name="genero" id="exampleFormControlSelect1">
                  <option>Hombre</option>
                  <option>Mujer</option>
                  <option>Prefiero no decirlo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecnacimiento" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">País de nacimiento</label>
                <select class="form-control" name="paisnac" id="exampleFormControlSelect1">
                    @foreach ($countries as $countri )
                        <option value="">{{$countri->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Departamento de nacimiento</label>
                <select class="form-control" name="depanac" id="depanac">
                    @foreach ($states as $stat )
                    <option value="">{{$stat->nombre}}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Municipio de nacimiento</label>
                <select class="form-control" name="id_muni_nac" id="exampleFormControlSelect1">
                    @foreach ($towns as $tow )
                        <option value="{{$tow->id}}">{{$tow->nombre}}</option>
                     @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Estrato Socioeconómico</label>
                <select class="form-control" name="estrato" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Cursos</label>
                <select class="form-control" name="id_cursos" id="exampleFormControlSelect1">
                    <option>Seleccionar</option>
                    @foreach ($cursito as $grado)
                        <option value="{{$grado->id}}">{{$grado->nombre}}</option>

                    @endforeach
                </select>
            </div>
            <button type="button" class="btn btn-secondary">
                <a href="/student/{{$studentsito->id}}" class="btn btn-success">regresar</a>
            </button>
            <button type="submit" class="btn btn-success">Continuar</button>
          </div>
        </div>
    </div>
    </form>
    </body>


@endsection
