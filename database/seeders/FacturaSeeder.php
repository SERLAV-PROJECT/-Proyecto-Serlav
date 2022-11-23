<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factura::create([

            'user_id' => 1,
            'nombreCliente' => 'David',
            'fecha' => '2022-11-22',
            'valorTotal' => 13000,
            'estado' => 'Paga',
        

        ]);


        Factura::create([

            'user_id' => 1,
            'nombreCliente' => 'Daniel',
            'fecha' => '2022-11-22',
            'valorTotal' => 18500,
            'estado' => 'Paga',
           

        ]);
    }
}
