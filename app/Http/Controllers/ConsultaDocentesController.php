<?php

// app/Http/Controllers/ConsultaDocentesController.php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class ConsultaDocentesController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('consulta_docentes.index', compact('docentes'));
    }

    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view('consulta_docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'NOM_DOCENTE' => 'required|string|max:20',
            'AP_P_DOCENTE' => 'required|string|max:20',
            'AP_M_DOCENTE' => 'required|string|max:20',
            'DEP_DOCENTE' => 'required|string|max:30',
            'ASIGNATURA_DOCENTE' => 'required|string|max:40',
            'TEL_DOCENTE' => 'required|numeric',
            'CORREO_DOCENTE' => 'required|email|max:30',
        ]);

        $docente->update($request->all());

        return redirect()->route('consulta_docentes.index')->with('success', 'Docente actualizado exitosamente');
    }


    public function destroy($id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();

        return redirect()->route('consulta_docentes.index')->with('success', 'Docente eliminado correctamente');
    }

}
