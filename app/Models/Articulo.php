<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';
    protected $primaryKey = 'referencia';
    protected $fillable = ['marca', 'referencia', 'nombre', 'descripcion', 'color', 'precioUnitario', 'observacion', 'foto'];
    public $timestamps = 'true';
}
