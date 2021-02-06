<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 
        DB::table('c_tipos')->insert([
            'nombre' => 'tipo_usaurio_1',
            'descripcion' => 'descripcion_1'
        ]);

              
        DB::table('c_tipos')->insert([
            'nombre' => 'tipo_usaurio_2',
            'descripcion' => 'descripcion_2'
        ]);


              
        DB::table('c_tipos')->insert([
            'nombre' => 'tipo_usaurio_3',
            'descripcion' => 'descripcion_3'
        ]);


              
        DB::table('c_tipos')->insert([
            'nombre' => 'tipo_usaurio_4',
            'descripcion' => 'descripcion_4'
        ]);
    }
}
