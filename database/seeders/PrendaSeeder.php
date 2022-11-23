<?php

namespace Database\Seeders;

use App\Models\Prenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prenda::create([

            'nombrePrenda' => 'Buzo',
            'tipoTela' => 'seda',
            'color' => 'rojo',
            'cantidad' => 1,
            'valor' => 4500

        ]);

        Prenda::create([
            
            'nombrePrenda' => 'Almohadas',
            'tipoTela' => 'Terciopelo',
            'color' => 'Blanca',
            'cantidad' => 2,
            'valor' => 12000

        ]);


        Prenda::create([
            
            'nombrePrenda' => 'Jeans',
            'tipoTela' => 'Algodon',
            'color' => 'Negro',
            'cantidad' => 1,
            'valor' => 5000

        ]);



        Prenda::create([
            
            'nombrePrenda' => 'Chaqueta',
            'tipoTela' => 'Lana',
            'color' => 'verde',
            'cantidad' => 1,
            'valor' => 7000

        ]);


        Prenda::create([
            
            'nombrePrenda' => 'Camisa',
            'tipoTela' => 'Lino',
            'color' => 'Blanca',
            'cantidad' => 1,
            'valor' => 5000

        ]);


        Prenda::create([
            
            'nombrePrenda' => 'Pantalon',
            'tipoTela' => 'Paño',
            'color' => 'Gris',
            'cantidad' => 1,
            'valor' => 5500

        ]);
    }
}
