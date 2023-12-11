<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InicioController;

Route::get('/estudiantes', [InicioController::class, 'mostrarEstudiantes']);
Route::get('/docentes', [InicioController::class, 'mostrarDocentes']);
Route::get('/prestamos', [InicioController::class, 'mostrarPrestamos']);
Route::get('/categoria', [InicioController::class, 'mostrarCategorias']);
Route::get('/mantenimiento', [InicioController::class, 'mostrarMantenimiento']);
Route::get('/equipos', [InicioController::class, 'mostrarEquipos']);
Route::get('/inicio', [InicioController::class, 'mostrarInicio']);
Route::get('/consulta', [InicioController::class, 'mostrarConsulta']);


Route::get('/inicio', [InicioController::class, 'index'])->name('inicio.index');





/*DOCENTES*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\DocentesController;

Route::get('/formulario-docentes', [DocentesController::class, 'mostrarFormulario']);
Route::post('/formulario-docentes', [DocentesController::class, 'procesarFormulario']);


/*ESTUDIANTES*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\EstudiantesController;

Route::get('/estudiantes', [EstudiantesController::class, 'mostrarFormulario']);
Route::post('/estudiantes', [EstudiantesController::class, 'procesarFormulario']);


/*EQUIPOS*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\EquiposController;

Route::get('/equipos', [EquiposController::class, 'mostrarFormulario']);
Route::post('/equipos', [EquiposController::class, 'procesarFormulario']);


/*Categoria*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\CategoriaController;

Route::get('/categoria', [CategoriaController::class, 'mostrarFormulario']);
Route::post('/categoria', [CategoriaController::class, 'procesarFormulario']);

/*Mantenimiento*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\MantenimientoController;

Route::get('/mantenimiento', [MantenimientoController::class, 'mostrarFormulario']);
Route::post('/mantenimiento', [MantenimientoController::class, 'procesarFormulario']);


/*PRESTAMOS*/
// Importa el controlador que manejará estas rutas
use App\Http\Controllers\PrestamosController;

Route::get('/prestamos', [PrestamosController::class, 'mostrarFormulario']);
Route::post('/prestamos', [PrestamosController::class, 'procesarFormulario']);






/*CONSULTAS */
use App\Http\Controllers\ConsulPrestamosController;

Route::get('/consulta', [ConsulPrestamosController::class, 'consultaPrestamos']);



/*DOCENTES*/

use App\Http\Controllers\ConsultaDocentesController;

Route::get('/consulta_docentes', [ConsultaDocentesController::class, 'index'])->name('consulta_docentes.index');

Route::get('/consulta_docentes/{id}/edit', [ConsultaDocentesController::class, 'edit'])->name('consulta_docentes.edit');

Route::put('/consulta_docentes/{docente}', [ConsultaDocentesController::class, 'update'])->name('consulta_docentes.update');

Route::delete('/consulta_docentes/{id}', [ConsultaDocentesController::class, 'destroy'])->name('consulta_docentes.destroy');
