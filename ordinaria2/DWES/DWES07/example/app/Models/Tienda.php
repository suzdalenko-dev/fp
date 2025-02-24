<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $table = 'tiendas';   # Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';   # Clave primaria
    public $timestamps = false;     # Deshabilitar timestamps

    protected $fillable = [
        'name',
        'direccion',
        'state',
        'statex'
    ];
}
