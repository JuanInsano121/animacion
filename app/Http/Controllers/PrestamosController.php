<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamos;

class PrestamosController extends Controller
{
    public function mostrarFormulario()
    {
        return view('prestamos');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_PRESTAMO' => 'required|numeric',
            'ID_ENCARGADO' => 'required|numeric',
            'NOMBRE_ENCARGADO' => 'required|max:50',
            'HORA_PRESTAMO' => 'required|date_format:H:i', // Formato de hora HH:ii
            'FECHA_PRESTAMO' => 'required|date',
            'FECHA_DEVUELTA' => 'required|date',
            'ID_EQUIPO' => 'required|numeric',
            'NO_CONTROL' => 'required|numeric',
            'ID_DOCENTE' => 'required|numeric',
        ]);

        $prestamo = new Prestamos();

        $prestamo->ID_PRESTAMO = $request->input('ID_PRESTAMO');
        $prestamo->ID_ENCARGADO = $request->input('ID_ENCARGADO');
        $prestamo->NOMBRE_ENCARGADO = $request->input('NOMBRE_ENCARGADO');
        $prestamo->HORA_PRESTAMO = $request->input('HORA_PRESTAMO');
        $prestamo->FECHA_PRESTAMO = $request->input('FECHA_PRESTAMO');
        $prestamo->FECHA_DEVUELTA = $request->input('FECHA_DEVUELTA');
        $prestamo->ID_EQUIPO = $request->input('ID_EQUIPO');
        $prestamo->NO_CONTROL = $request->input('NO_CONTROL');
        $prestamo->ID_DOCENTE = $request->input('ID_DOCENTE');

        $prestamo->save();

        return redirect('/prestamos')->with('success', 'Registro de Préstamo añadido correctamente');
    }
}
