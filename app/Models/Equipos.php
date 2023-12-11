<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table = 'EQUIPO';
    protected $primaryKey = 'ID_EQUIPO';
    public $timestamps = false;

    protected $fillable = [
        'ID_EQUIPO', 'NOMBRE_EQUIPO', 'MARCA_MOD', 'DESCRIPCION_EQUIPO', 'ID_CATEGORIA',
    ];
}
