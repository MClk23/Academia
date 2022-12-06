@extends('layouts.app')

@section('titulo', 'Sobre Nosotros')

@section('contenido')

    <h3>Misión</h3>
    <p>La academia de software Aeternum, es una unidad adscrita a la Vicerrectoría Académica, la cual desarrolla procesos de enseñanza y aprendizaje de fronted y backend para fomentar el conocimiento pleno de las diferentes maneras de programación<p>

    <h3>Visión</h3>
    <p> La academia de software Aeternum, a 2022 será una unidad académica líder a nivel local y nacional en el desarrollo de software y que a través del aprendizaje y enseñanza de los distintos lenguajes de programación potenciará la movilidad académica, la interacción cultural y el desarrollo de procesos académicos e investigativos requeridos por los profesionales del mundo de hoy.</p>
    <img src={{ asset('academiaestudiante.jpeg') }} alt="" height="400px" width="780px">
    <a href="http://127.0.0.1:8000/" class="btn btn-warning" style="margin-left: 30px;">Bienvenidos</a>
@endsection
