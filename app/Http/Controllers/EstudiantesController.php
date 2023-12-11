<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
{
    public function mostrarFormulario()
    {
        return view('estudiantes');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_ESTUDIANTES' => 'required|numeric',
            'NOMBRE_EST' => 'required|max:20',
            'AP_P_EST' => 'required|max:20',
            'AP_M_EST' => 'required|max:20',
            'CORREO_INSTITUCIONAL' => 'required|email|max:30',
            'NO_CONTROL' => 'required|numeric',
            'GRUPO' => 'required|numeric',
            'CARRERA' => 'required|max:30',
        ]);

        $estudiante = new Estudiantes();

        $estudiante->ID_ESTUDIANTES = $request->input('ID_ESTUDIANTES');
        $estudiante->NOMBRE_EST = $request->input('NOMBRE_EST');
        $estudiante->AP_P_EST = $request->input('AP_P_EST');
        $estudiante->AP_M_EST = $request->input('AP_M_EST');
        $estudiante->CORREO_INSTITUCIONAL = $request->input('CORREO_INSTITUCIONAL');
        $estudiante->NO_CONTROL = $request->input('NO_CONTROL');
        $estudiante->GRUPO = $request->input('GRUPO');
        $estudiante->CARRERA = $request->input('CARRERA');

        $estudiante->save();

        return redirect('/estudiantes')->with('success', 'Estudiante añadido correctamente');
    }
}
