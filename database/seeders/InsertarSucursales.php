<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')-> insert(array(
            [
            'nombre' => 'El Tecnomago',
            'direccion' => 'Gran Avenida #1734, La Cisterna',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nombre' => 'El cable suelto',
            'direccion' => 'La Pintana #3456, San Miguel',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nombre' => 'Rocagramación',
            'direccion' => 'Avda. La Feria #185, Lo Espejo',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nombre' => 'RadioNorte',
            'direccion' => 'Avda. Sta. Rosa #6668, San Joaquín',
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'nombre' => 'Juan Radio',
            'direccion' => 'Villa Francia #2323, Estación Central',
            'created_at' => now(),
            'updated_at' => now()
            ]
        ));
    }
}
