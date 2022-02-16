<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name'=> 'create user']);
        Permission::create(['name'=> 'read user']);
        Permission::create(['name'=> 'update user']);
        Permission::create(['name'=> 'delete user']);

        Role::create(['name' => 'user']);

        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $admin = User::create([
            'name' => 'super-admin',
            'email' => 'super@admin.com',
            'email_verified_at' => now(),
            'is_admin' => 1,
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole('super-admin');
        $admin->givePermissionTo($allPermissions);
    }
}
