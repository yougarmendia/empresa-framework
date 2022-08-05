<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')-> insert(array(
            [
                'nombre' => 'Audífono Phillips M-380',
                'categoria_id' => 2,
                'descripcion' => 'Los audífonos Phillips M-380 son de la máxima calidad alemana, cómodos, suaves y livianos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Apple Beats Studio 3',
                'categoria_id' => 2,
                'descripcion' => 'Elegantes, cómodos, suaves y livianos, y, como son de Apple, totalmente sobrevalorados.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'OS2 Warp',
                'categoria_id' => 1,
                'descripcion' => 'Un clásico del que ya nadie usa ni se acuerda',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Cámara digital Canon EOS 4000D',
                'categoria_id' => 2,
                'descripcion' => 'Extraordinaria calidad, estabilidad y amplio soporte a lentes estandarizados',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Funko Pop Luke Skywalker with Grogu',
                'categoria_id' => 3,
                'descripcion' => 'Figura de la escena más triste de la franquicia The Mandalorian',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lavadora Mademsa F5',
                'categoria_id' => 4,
                'descripcion' => 'Mucha capacidad, gran máquina',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
    }
}
