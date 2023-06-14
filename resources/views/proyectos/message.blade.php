@extends('layout/template')

@section('title', 'Proyectos | consejo')

@section('contenido')
<main>
    <div class="container py-4">
            <h2>{{$msg}}</h2>


            <a href="{{url ('proyectos')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>