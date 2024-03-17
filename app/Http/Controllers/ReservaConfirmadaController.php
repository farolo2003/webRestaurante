<?php

namespace App\Http\Controllers;
use App\Models\booking; // Asegúrate de importar el modelo Reserva

use Illuminate\Http\Request;
class ReservaConfirmadaController extends Controller
{
    // Método para mostrar el formulario de reserva
    public function index()
    {
        return view('reservaConfirmada');


        

    }

}
