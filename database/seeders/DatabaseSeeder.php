<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\menudish;
use App\Models\menu;
use App\Models\restaurante;
use App\Models\dish;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DishTableSeeder::class,
            MenuDishTableSeeder::class,
            MenuTableSeeder::class,
            RestauranteTableSeeder::class,
        ]);
    }
}
