@extends('layout/template')

@section('title', 'Proyectos | consejo')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de Proyectos</h2>

        <a href="{{url('Proyectos/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Proyectos</th>
                    <th>Fuente Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{$proyecto->id}}</td>
                    <td>{{$proyecto->NombreProyecto}}</td>
                    <td>{{$proyecto->FuenteFondos}}</td>
                    <td>{{$proyecto->MontoPlanificado}}</td>
                    <td>{{$proyecto->MontoPatrocinado}}</td>
                    <td>{{$proyecto->MontoFondosPropios}}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
    </div>
</main>    