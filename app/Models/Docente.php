<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'DOCENTES';
    protected $primaryKey = 'ID_DOCENTE';
    public $timestamps = false; // Si no tienes columnas 'created_at' y 'updated_at'

    protected $fillable = [
        'ID_DOCENTE', 'NOM_DOCENTE', 'AP_P_DOCENTE', 'AP_M_DOCENTE', 'DEP_DOCENTE',
        'ASIGNATURA_DOCENTE', 'TEL_DOCENTE', 'CORREO_DOCENTE',
    ];

    // Resto de las propiedades y métodos del modelo
}
