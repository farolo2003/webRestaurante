<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurante extends Model
{
    use HasFactory;

    protected $table = 'restaurante'; // Nombre de la tabla en la base de datos

    protected $fillable = ['location']; // Atributos que se pueden asignar masivamente
}
