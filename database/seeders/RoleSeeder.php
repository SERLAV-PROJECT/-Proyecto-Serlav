<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Almacenista']);
        $role3 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'user.dashboard'])->syncRoles($role1);
        Permission::create(['name' => 'factura.dashboard'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'detalle.dashboard'])->syncRoles($role1);
        Permission::create(['name' => 'pago.dashboard'])->syncRoles($role1);
        Permission::create(['name' => 'prenda.dashboard'])->syncRoles($role1);

    }
}
