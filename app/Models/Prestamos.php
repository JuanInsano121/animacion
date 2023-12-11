<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $table = 'PRESTAMOS';
    protected $primaryKey = 'ID_PRESTAMO';
    public $timestamps = false;

    protected $fillable = [
        'ID_PRESTAMO', 'ID_ENCARGADO', 'NOMBRE_ENCARGADO', 'HORA_PRESTAMO', 'FECHA_PRESTAMO', 'FECHA_DEVUELTA',
        'ID_EQUIPO', 'NO_CONTROL', 'ID_DOCENTE',
    ];
}
