<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Nombre de la tabla en la base de datos

    protected $fillable = ['name', 'price']; // Atributos que se pueden asignar masivamente
}
