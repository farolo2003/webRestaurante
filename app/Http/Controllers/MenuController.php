<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menudish;
use App\Models\dish;
use App\Models\menu;

class MenuController extends Controller
{
    public function index()
    {
        // Obtener los primeros 3 menús
        $menus = Menu::take(3)->get();

        // Recuperar los platos asociados al menú 1 y sus nombres
        $platosMenu1 = MenuDish::where('id_menu', 1)->pluck('id_dish');
        $nombresPlatosMenu1 = Dish::whereIn('id', $platosMenu1)->pluck('name');

        // Recuperar el precio del menú 1
        $precioMenu1 = Menu::find(1)->price;

        // Repetir el proceso para los menús 2 y 3
        // Recuperar los platos asociados al menú 2 y sus nombres
        $platosMenu2 = MenuDish::where('id_menu', 2)->pluck('id_dish');
        $nombresPlatosMenu2 = Dish::whereIn('id', $platosMenu2)->pluck('name');

        // Recuperar el precio del menú 2
        $precioMenu2 = Menu::find(2)->price;

        // Recuperar los platos asociados al menú 3 y sus nombres
        $platosMenu3 = MenuDish::where('id_menu', 3)->pluck('id_dish');
        $nombresPlatosMenu3 = Dish::whereIn('id', $platosMenu3)->pluck('name');

        // Recuperar el precio del menú 3
        $precioMenu3 = Menu::find(3)->price;

        return view('menu', compact('menus', 'nombresPlatosMenu1', 'precioMenu1', 'nombresPlatosMenu2', 'precioMenu2', 'nombresPlatosMenu3', 'precioMenu3'));
    }
}
