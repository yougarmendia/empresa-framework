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
                'categoria_id' => 19,
                'sucursal_id' => 6,
                'descripcion' => 'Los audífonos Phillips M-380 son de la máxima calidad alemana, cómodos, suaves y livianos',
                'cantidad' => 6,
                'precio' => 65500,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Apple Beats Studio 3',
                'categoria_id' => 19,
                'sucursal_id' => 6,
                'descripcion' => 'Elegantes, cómodos, suaves y livianos, y, como son de Apple, totalmente sobrevalorados.',
                'cantidad' => 3,
                'precio' => 148500,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'OS2 Warp',
                'categoria_id' => 11,
                'sucursal_id' => 7,
                'descripcion' => 'Un clásico del que ya nadie usa ni se acuerda',
                'cantidad' => 0,
                'precio' => 12500,
                'estado' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Cámara digital Canon EOS 4000D',
                'categoria_id' => 13,
                'sucursal_id' => 8,
                'descripcion' => 'Extraordinaria calidad, estabilidad y amplio soporte a lentes estandarizados',
                'cantidad' => 4,
                'precio' => 500500,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Funko Pop Luke Skywalker with Grogu',
                'categoria_id' => 14,
                'sucursal_id' => 9,
                'descripcion' => 'Figura de la escena más triste de la franquicia The Mandalorian',
                'cantidad' => 10,
                'precio' => 15200,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Playstation 5',
                'categoria_id' => 18,
                'sucursal_id' => 10,
                'descripcion' => 'Vive miles de aventuras con esta máquina llena de poder recreativo',
                'cantidad' => 8,
                'precio' => 379000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lavadora Whirpool WWI12AW9LS 12 Kg',
                'categoria_id' => 16,
                'sucursal_id' => 8,
                'descripcion' => 'Potente, silenciosa y de gran capacidad. Viene con garantía extendida',
                'cantidad' => 3,
                'precio' => 378000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lavadora Fensa Premium Care Pro Black 21 Kg',
                'categoria_id' => 16,
                'sucursal_id' => 8,
                'descripcion' => 'Gran capacidad, mucho ahorro. La gran máquina del año. Viene con garantía extendida',
                'cantidad' => 3,
                'precio' => 468700,
                'estado' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Placa madre ASUS X-GAME F128HC B450',
                'categoria_id' => 12,
                'sucursal_id' => 9,
                'descripcion' => 'Gran expansividad, AM4, 32 Gb Memoria',
                'cantidad' => 3,
                'precio' => 128700,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Modem estándar Toshiba 5G',
                'categoria_id' => 15,
                'sucursal_id' => 6,
                'descripcion' => 'Gran capacidad, mucho ahorro. La gran máquina del año. Viene con garantía extendida',
                'cantidad' => 3,
                'precio' => 12700,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Camioneta FORD RAM 4WD',
                'categoria_id' => 17,
                'sucursal_id' => 10,
                'descripcion' => 'Todo el poder de una tradición. Carga máxima al menor precio',
                'cantidad' => 3,
                'precio' => 23820000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Impresora HP 4500XP',
                'categoria_id' => 20,
                'sucursal_id' => 8,
                'descripcion' => 'Gran economía. Gran detalle y repuestos siempre disponibles.',
                'cantidad' => 3,
                'precio' => 140000,
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ));
    }
}
