<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;

class EquiposController extends Controller
{
    public function mostrarFormulario()
    {
        return view('equipos');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_EQUIPO' => 'required|numeric',
            'NOMBRE_EQUIPO' => 'required|max:50',
            'MARCA_MOD' => 'required|max:30',
            'DESCRIPCION_EQUIPO' => 'required|max:250',
            'ID_CATEGORIA' => 'required|numeric',
        ]);

        $equipo = new Equipos();

        $equipo->ID_EQUIPO = $request->input('ID_EQUIPO');
        $equipo->NOMBRE_EQUIPO = $request->input('NOMBRE_EQUIPO');
        $equipo->MARCA_MOD = $request->input('MARCA_MOD');
        $equipo->DESCRIPCION_EQUIPO = $request->input('DESCRIPCION_EQUIPO');
        $equipo->ID_CATEGORIA = $request->input('ID_CATEGORIA');

        $equipo->save();

        return redirect('/equipos')->with('success', 'Equipo añadido correctamente');
    }
}
