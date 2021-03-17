<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;

    protected $fillable = [
'titulo',
'subreceta',
'estacion',
'destino',
'ingrediente',
'cantidad',
'cantidad',
'medida',
'descripcion',
'rcantidad',
'rmedida'
    ];
}
