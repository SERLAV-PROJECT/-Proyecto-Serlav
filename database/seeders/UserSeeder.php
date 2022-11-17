<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcos',
            'apellido' => 'Gama',
            'documento' => '1031646877',
            'telefono' => '3016951870',
            'email' => 'mggama@misena.edu.co',
            'password' => bcrypt('1407marcos'),
            'estado' => 'Activo'
            ])->assignRole('Admin');

        User::create([
            'name' => 'Gabriel',
            'apellido' => 'Santamaria',
            'documento' => '1031831484',
            'telefono' => '3202303045',
            'email' => 'gamamarcos3@gmail.com',
            'password' => bcrypt('1407marcos'),
            'estado' => 'Activo'
            ])->assignRole('Cliente');
    }
}
