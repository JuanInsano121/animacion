<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{

    public function mostrarEstudiantes()
    {
        return view('estudiantes');
    }

    public function mostrarDocentes()
    {
        return view('docentes');
    }

    public function mostrarPrestamos()
    {
        return view('prestamos');
    }

    public function mostrarCategorias()
    {
        return view('categoria');
    }

    public function mostrarMantenimiento()
    {
        return view('mantenimiento');
    }

    public function mostrarEquipos()
    {
        return view('equipos');
    }

    public function mostrarInicio()
{
    return view('welcome');
}

public function mostrarConsulta()
{
    return view('consulta');
}

public function mostrarDocentesConsulta()
    {
        return view('consultadocentes');
    }



    public function index()
    {
        return view('consulta_docentes.index');
    }








































}
