<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menudish extends Model
{
    use HasFactory;

    protected $table = 'menu_dish'; // Nombre de la tabla en la base de datos

    protected $fillable = ['id_menu', 'id_dish', 'relacion']; // Atributos que se pueden asignar masivamente
}
