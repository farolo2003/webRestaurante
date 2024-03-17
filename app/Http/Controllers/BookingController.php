<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking; // Asegúrate de importar el modelo Reserva
use App\Models\restaurante; // Asegúrate de importar el modelo Reserva
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    // Método para procesar la solicitud POST del formulario y guardar la reserva
    public function store(Request $request)
    {
        $location=$request->route("name");

        $idRestaurante=restaurante::where("location", $location)->first();

        //dd($idRestaurante);
        //dd($idRestaurante);
        $reserva=[
            "id_restaurante"=>$idRestaurante->id,
            "name"=>$request->name,
            "lastname"=>$request->lastname,
            "email"=>$request->email,
            "date"=>$request->date,
            "hour"=>$request->hour,
            "num_person"=>$request->num_person
        ];

        //dd($reserva);

        booking::create($reserva);

        Session::put("reserva",$reserva);
        return Redirect::route('reservaConfirmada.index');
    }
}
