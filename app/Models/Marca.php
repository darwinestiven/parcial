<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marca';
    protected $primaryKey = 'idMarca';
    //protected $fillable = ['marca', 'referencia', 'nombre', 'descripcion', 'color', 'precioUnitario', 'observacion', 'foto'];
    protected $fillable = ['idMarca', 'descripcion'];
    public $timestamps = 'true';
}
