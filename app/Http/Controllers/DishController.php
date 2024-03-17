<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dish; // Asegúrate de importar el modelo Dish

class DishController extends Controller
{
    public function index()
    {
        // Obtener todos los platos de la base de datos
        $platos = Dish::all();

        // Pasar los datos de los platos a la vista
        return view('dish', compact('platos'));
    }
}
