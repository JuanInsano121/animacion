<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConsulPrestamosController extends Controller
{
    public function consultaPrestamos(Request $request)
    {
        // Obtener la fecha de la URL o usar la fecha actual si no se proporciona
        $fechaSeleccionada = $request->input('fecha', Carbon::now()->toDateString());

        $prestamos = DB::table('PRESTAMOS')
            ->whereDate('FECHA_PRESTAMO', $fechaSeleccionada)
            ->get();

        return view('consulta', ['prestamos' => $prestamos, 'fechaActual' => $fechaSeleccionada]);
    }
}
