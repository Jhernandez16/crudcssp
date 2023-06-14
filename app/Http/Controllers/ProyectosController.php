<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos= Proyectos::all();
        return view('Proyectos.index', ['proyectos'=> $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NombreProyecto'=> 'required|unique:proyectos|max:10',
            'FuenteFondos'=> 'required|max:25',
            'MontoPlanificado'=> 'required|max:25',
            'MontoPatrocinado'=> 'required|max:25',
            'MontoFondosPropios'=> 'required|max:25'
        ]);

        $proyecto = new Proyectos();
        $proyecto->NombreProyecto=$request->input('NombreProyecto');
        $proyecto->FuenteFondos=$request->input('FueteFondos');
        $proyecto->MontoPlanificado=$request->input('MontoPlanificado');
        $proyecto->MontoPatrocinado=$request->input('MontoPatrocinado');
        $proyecto->MontoFondosPropios=$request->input('MontoFondosPropios');
        $proyecto->save();

        return view("Proyectos.message", ['msg' =>"Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyectos $proyectos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyectos $proyectos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyectos $proyectos)
    {
        //
    }
}
