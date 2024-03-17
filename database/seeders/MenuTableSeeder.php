<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            'name'=>'Menu 1',
            'description'=>"",
            'price'=>100,
        ]);

        DB::table('menu')->insert([
            'name'=>'Menu 2',
            'description'=>"",
            'price'=>120,
        ]);

        DB::table('menu')->insert([
            'name'=>'Menu 3',
            'description'=>"",
            'price'=>140,
        ]);
    }
}
