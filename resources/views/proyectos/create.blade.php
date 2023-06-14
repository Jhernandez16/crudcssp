@extends('layout/template')

@section('title', 'Registrar Proyectos | consejo')

@section('contenido')
<main>
    <div class="container py-4">
            <h2>Registrar Proyectos</h2>
            <form action="{{url('Proyectos')}}" method="post">

            @csrf

                <div class="mb-3 row">
                    <label for="NombreProyecto" class="col-sm-2 col-form-label">Nombre Proyecto</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="NombreProyecto" id="NombreProyecto" value="{{old('NombreProyecto')}}" required>
                    </div>    
                </div>

                <div class="mb-3 row">
                    <label for="FuenteFondos" class="col-sm-2 col-form-label">Fuente Fondos</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="FuenteFondos" id="FuenteFondos" value="{{old('FuenteFondos')}}" required>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="MontoPlanificado" class="col-sm-2 col-form-label">Monto Planificado</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="MontoPlanificado" id="NombreProyecto" value="{{old('MontoPlanificado')}}" required>
                    </div>
                </div>
  

                <div class="mb-3 row">
                    <label for="MontoPatrocinado" class="col-sm-2 col-form-label">Monto Patrocinado</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="MontoPatrocinado" id="MontoPatrocinado" value="{{old('MontoPatrocinado')}}" required>
                    </div> 
                </div>       


                <div class="mb-3 row">
                    <label for="MontoFondosPropios" class="col-sm-2 col-form-label">Monto Fondos Propios</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="MontoFondosPropios" id="MontoFondosPropios" value="{{old('MontoFondosPropios')}}" required>
                    </div>    
               
                </div>    

            

                <a href="{{url('Proyectos')}}" class="btn btn-secondary">Regresar</a>

                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
    </div>
</main>