<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Municipio::create([
            'nombre'=> "Cozumel"
         ]);
         
         \App\Models\Municipio::create([
            'nombre'=> "Felipe Carrillo Puerto"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Isla Mujeres"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Othón P. Blanco"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Benito Juárez"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "José María Morelos"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Lázaro Cárdenas"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Solidaridad"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Tulum"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Bacalar"
         ]);

         \App\Models\Municipio::create([
            'nombre'=> "Puerto Morelos"
         ]);
    

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
