<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Roles::create(['name' => 'Administrador']);
        $almacenista = Roles::create(['name' => 'Almacenista']);

        $verInventario = Permissions::create(['name' => 'Ver Inventario']);
        $agregarProductos = Permissions::create(['name' => 'Agregar Productos']);
        $aumentarInventario = Permissions::create(['name' => 'Aumentar Inventario']);
        $darDeBaja = Permissions::create(['name' => 'Dar de baja/reactivar un producto']);
        $verSalidas = Permissions::create(['name' => 'Ver Salidas de productos']);
        $sacarInventario = Permissions::create(['name' => 'Sacar inventario del almacen']);
        $verHistorico = Permissions::create(['name' => 'Ver modulo historico']);

        $admin->permissions()->attach([$verInventario->id, $agregarProductos->id, $aumentarInventario->id, $darDeBaja->id, $verHistorico->id]);
        $almacenista->permissions()->attach([$verInventario->id, $verSalidas->id, $sacarInventario->id]);
    }
}
