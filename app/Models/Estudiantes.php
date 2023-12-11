<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'ESTUDIANTES';
    protected $primaryKey = 'ID_ESTUDIANTES';
    public $timestamps = false;

    protected $fillable = [
        'ID_ESTUDIANTES', 'NOMBRE_EST', 'AP_P_EST', 'AP_M_EST', 'CORREO_INSTITUCIONAL',
        'NO_CONTROL', 'GRUPO', 'CARRERA',
    ];
}
