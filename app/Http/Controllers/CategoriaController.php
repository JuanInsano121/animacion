<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('categoria');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'ID_CATEGORIA' => 'required|numeric',
            'ID_EQUIPO' => 'required|numeric',
            'NOMBRE_EQUIPO' => 'required|max:250',
            'CATEGORIA' => 'required|max:80',
        ]);

        $categoria = new Categoria();

        $categoria->ID_CATEGORIA = $request->input('ID_CATEGORIA');
        $categoria->ID_EQUIPO = $request->input('ID_EQUIPO');
        $categoria->NOMBRE_EQUIPO = $request->input('NOMBRE_EQUIPO');
        $categoria->CATEGORIA = $request->input('CATEGORIA');

        $categoria->save();

        return redirect('/categoria')->with('success', 'Categoría añadida correctamente');
    }
}
