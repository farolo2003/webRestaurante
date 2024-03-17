<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReservaConfirmadaController;


use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');
Route::get('/restaurante', [RestauranteController::class, 'index'])->name('restaurante.index');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::get('/dish', [DishController::class, 'index'])->name('dish.index');

Route::post('/restaurante/{name}', [BookingController::class, 'store'])->name('booking.store');

Route::get('/reservaConfirmada', [ReservaConfirmadaController::class, 'index'])->name('reservaConfirmada.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
