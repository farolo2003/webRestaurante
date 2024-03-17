<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dish')->insert([
            'name'=>'Tartar de toro con caviar'
        ]);
        DB::table('dish')->insert([
            'name'=>'Sashimi de salmón'
        ]);
        DB::table('dish')->insert([
            'name'=>'Sashimi de atún'
        ]);
        DB::table('dish')->insert([
            'name'=>'Tempura de langostino tigre'
        ]);
        DB::table('dish')->insert([
            'name'=>'Croqueta de carabinero y kimuchi'
        ]);
        DB::table('dish')->insert([
            'name'=>'Dragon maki'
        ]);
        DB::table('dish')->insert([
            'name'=>'Maki de bogavante'
        ]);
        DB::table('dish')->insert([
            'name'=>'Maki de anguila'
        ]);
        DB::table('dish')->insert([
            'name'=>'Nigiri de salmón flambeado'
        ]);
        DB::table('dish')->insert([
            'name'=>'Nigiri de pez mantequilla'
        ]);
        DB::table('dish')->insert([
            'name'=>'Costilla de wagyu asada a baja temperatura'
        ]);
        DB::table('dish')->insert([
            'name'=>'Jardín Zen'
        ]);
        DB::table('dish')->insert([
            'name'=>'Gyozas de jabalí'
        ]);


        DB::table('dish')->insert([
            'name'=>'Nigiri de arroz crujiente'
        ]);

        DB::table('dish')->insert([
            'name'=>'Nigiri de vieira templada'
        ]);

        DB::table('dish')->insert([
            'name'=>'Nigiri de toro'
        ]);

        DB::table('dish')->insert([
            'name'=>'Anguila del Delta del Ebro'
        ]);

        DB::table('dish')->insert([
            'name'=>'Gunkan sushi Tallon'
        ]);




    }
}
