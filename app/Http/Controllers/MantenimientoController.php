<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;

class MantenimientoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('mantenimiento');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_MANTENIMIENTO' => 'required|numeric',
            'ID_EQUIPO' => 'required|numeric',
            'PRIORIDAD_MANT' => 'required|max:30',
            'DURACION_MANT' => 'required|max:20',
            'FECHA_MANT' => 'required|date',
            'DESCRIPCION_MAT' => 'required|max:80',
        ]);

        $mantenimiento = new Mantenimiento();

        $mantenimiento->ID_MANTENIMIENTO = $request->input('ID_MANTENIMIENTO');
        $mantenimiento->ID_EQUIPO = $request->input('ID_EQUIPO');
        $mantenimiento->PRIORIDAD_MANT = $request->input('PRIORIDAD_MANT');
        $mantenimiento->DURACION_MANT = $request->input('DURACION_MANT');
        $mantenimiento->FECHA_MANT = $request->input('FECHA_MANT');
        $mantenimiento->DESCRIPCION_MAT = $request->input('DESCRIPCION_MAT');

        $mantenimiento->save();

        return redirect('/mantenimiento')->with('success', 'Registro de Mantenimiento añadido correctamente');
    }
}
