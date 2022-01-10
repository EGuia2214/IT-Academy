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
        $admin = Role::create(['guard_name' => 'api', 'name' => 'admin']);
        $usuario = Role::create(['guard_name' => 'api', 'name' => 'usuario']);

        Permission::create(['guard_name' => 'api', 'name' => 'dashboard'])->syncRoles([$admin, $usuario]);
        Permission::create(['guard_name' => 'api', 'name' => 'teams'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.show'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.edit'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.update'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.create'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.store'])->assignRole($admin);
        Permission::create(['guard_name' => 'api', 'name' => 'teams.destroy'])->assignRole($admin);;
        
    }
}
