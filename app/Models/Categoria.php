<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'CATEGORIA';
    protected $primaryKey = 'ID_CATEGORIA';
    public $timestamps = false;

    protected $fillable = [
        'ID_CATEGORIA', 'ID_EQUIPO', 'NOMBRE_EQUIPO', 'CATEGORIA',
    ];
}
