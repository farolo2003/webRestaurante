<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestauranteTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('restaurante')->insert([
            'location'=>'Barcelona'
        ]);
        DB::table('restaurante')->insert([
            'location'=>'Madrid'
        ]);
        DB::table('restaurante')->insert([
            'location'=>'Sevilla'
        ]);
        DB::table('restaurante')->insert([
            'location'=>'Andorra'
        ]);
        DB::table('restaurante')->insert([
            'location'=>'Alicante'
        ]);
        DB::table('restaurante')->insert([
            'location'=>'Bilbao'
        ]);
    }
}
