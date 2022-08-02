<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')-> insert(array(
            [
                'nombre' => 'Software',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Componentes',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Fotografía',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Coleccionables',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Conectividad',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Línea blanca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Automovil',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Consolas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Audio',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Periféricos',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
    }
}
