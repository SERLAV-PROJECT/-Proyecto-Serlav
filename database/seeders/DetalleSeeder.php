<?php

namespace Database\Seeders;

use App\Models\Detalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle::create([

            'descripcion' => 'Manchado',
            'factura_id' => 1,
            'prenda_id' => 1

        ]);

        Detalle::create([

            'descripcion' => 'Rota',
            'factura_id' => 1,
            'prenda_id' => 2

        ]);

        Detalle::create([

            'descripcion' => 'Manchado de Sangre',
            'factura_id' => 2,
            'prenda_id' => 3

        ]);

        Detalle::create([

            'descripcion' => 'Rota en una manga',
            'factura_id' => 2,
            'prenda_id' => 4

        ]);

        Detalle::create([

            'descripcion' => 'Marcada con tinte negro',
            'factura_id' => 2,
            'prenda_id' => 5

        ]);

        Detalle::create([

            'descripcion' => 'Buen estado',
            'factura_id' => 2,
            'prenda_id' => 6

        ]);
    }
}
