<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $admin = User::create(config('default_seeder.admin'));
        $role = Role::create(config('default_seeder.role'));
        $admin->assignRole($role);

        foreach (config('default_seeder.permissions') as $permission) {
            $permission = Permission::create($permission);
            $role->givePermissionTo($permission);
            $admin->givePermissionTo($permission);
        }
        DocumentType::create(config('default_seeder.document_type'));

    }
}
