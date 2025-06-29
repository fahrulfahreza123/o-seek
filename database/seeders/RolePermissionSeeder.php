<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Buat permissions
        $permissions = [
            'create-user',
            'edit-user',
            'delete-user',
            'view-user',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Buat roles dan tambahkan permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo(['view-user']);

        $operatorRole = Role::create(['name' => 'operator']);
        $operatorRole->givePermissionTo(['create-user', 'view-user']);

        $user = User::find(1); // ID user yang ingin diberi role
        $user->assignRole('admin'); // Assign role "admin" ke user

        // Anda juga bisa memberikan permission langsung tanpa role:
        $user->givePermissionTo('edit-user'); // Berikan permission langsung
    }
}
