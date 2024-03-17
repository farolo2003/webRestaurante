<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = 'booking'; // Nombre de la tabla en la base de datos

    protected $fillable = ['id_restaurante','name','lastname','email','date','hour','num_person']; // Atributos que se pueden asignar masivamente
}

