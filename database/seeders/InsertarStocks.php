<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarStocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')-> insert(array(
            [
                'producto_id' => 1,
                'sucursal_id' => 1,
                'cantidad' => 30,
                'precio' => 35000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 2,
                'sucursal_id' => 2,
                'cantidad' => 20,
                'precio' => 128000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 3,
                'sucursal_id' => 3,
                'cantidad' => 30,
                'precio' => 15000,
                'estado' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 4,
                'sucursal_id' => 1,
                'cantidad' => 5,
                'precio' => 50000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 5,
                'sucursal_id' => 1,
                'cantidad' => 50,
                'precio' => 15000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 6,
                'sucursal_id' => 3,
                'cantidad' => 8,
                'precio' => 350000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'producto_id' => 6,
                'sucursal_id' => 2,
                'cantidad' => 3,
                'precio' => 350000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
    }
}
