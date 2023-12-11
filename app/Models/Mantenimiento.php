<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $table = 'MANTENIMIENTO';
    protected $primaryKey = 'ID_MANTENIMIENTO';
    public $timestamps = false;

    protected $fillable = [
        'ID_MANTENIMIENTO', 'ID_EQUIPO', 'PRIORIDAD_MANT', 'DURACION_MANT', 'FECHA_MANT', 'DESCRIPCION_MAT',
    ];
}
