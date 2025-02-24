<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos'; # Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';   # Clave primaria
    public $timestamps = false;     # Deshabilitar timestamps

    protected $fillable = [
        'nombre',
        'nombre_corto',
        'descripcion',
        'pvp',
        'familia'
    ];
}
