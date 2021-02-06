<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        DB::table('c_estados')->insert([
            'nombre' => 'Activo',
            'descripcion' => 'descripcion_1'
        ]);
                 
        DB::table('c_estados')->insert([
            'nombre' => 'Inactivo',
            'descripcion' => 'descripcion_2'
        ]);         

        DB::table('c_estados')->insert([
            'nombre' => 'Suspendido',
            'descripcion' => 'descripcion_3'
        ]);         

        DB::table('c_estados')->insert([
            'nombre' => 'Cancelado',
            'descripcion' => 'descripcion_4'
        ]);
    }
}
