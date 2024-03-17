<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class RestauranteController extends Controller
{
    // Método para mostrar el formulario de reserva
    public function index()
    {
        return view('restaurante');
    }

}
