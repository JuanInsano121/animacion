<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocentesController extends Controller
{
    public function mostrarFormulario()
    {
        return view('docentes');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_DOCENTE' => 'required|numeric',
            'NOM_DOCENTE' => 'required|max:20',
            'AP_P_DOCENTE' => 'required|max:20',
            'AP_M_DOCENTE' => 'required|max:20',
            'DEP_DOCENTE' => 'required|max:30',
            'ASIGNATURA_DOCENTE' => 'required|max:40',
            'TEL_DOCENTE' => 'required|numeric',
            'CORREO_DOCENTE' => 'required|email|max:30',
        ]);

        // Buscar el docente por ID o crear uno nuevo
        $docente = Docente::firstOrNew(['ID_DOCENTE' => $request->input('ID_DOCENTE')]);

        // Actualizar los demás campos del docente
        $docente->NOM_DOCENTE = $request->input('NOM_DOCENTE');
        $docente->AP_P_DOCENTE = $request->input('AP_P_DOCENTE');
        $docente->AP_M_DOCENTE = $request->input('AP_M_DOCENTE');
        $docente->DEP_DOCENTE = $request->input('DEP_DOCENTE');
        $docente->ASIGNATURA_DOCENTE = $request->input('ASIGNATURA_DOCENTE');
        $docente->TEL_DOCENTE = $request->input('TEL_DOCENTE');
        $docente->CORREO_DOCENTE = $request->input('CORREO_DOCENTE');

        // Guardar el docente en la base de datos
        $docente->save();

        return redirect('/formulario-docentes')->with('success', 'Docente añadido correctamente');
    }
}

