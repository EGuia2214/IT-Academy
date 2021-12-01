<?php

namespace Database\Seeders;

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
        $admin = Role::create(['name' => 'admin']);
        $usuario = Role::create(['name' => 'usuario']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $usuario]);

        Permission::create(['name' => 'teams.show'])->assignRole($admin);
        Permission::create(['name' => 'teams.edit'])->assignRole($admin);
        Permission::create(['name' => 'teams.update'])->assignRole($admin);
        Permission::create(['name' => 'teams.create'])->assignRole($admin);
        Permission::create(['name' => 'teams.store'])->assignRole($admin);
        Permission::create(['name' => 'teams.destroy'])->assignRole($admin);;
        
    }
}
