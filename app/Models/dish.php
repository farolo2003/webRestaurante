<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;

    protected $table = 'dish'; // Nombre de la tabla en la base de datos

    protected $fillable = ['name']; // Atributos que se pueden asignar masivamente
}

