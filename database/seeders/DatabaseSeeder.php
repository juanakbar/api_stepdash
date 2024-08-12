<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $SuperAdminAccount = User::create([
            'nama' => 'Super Admin',
            'email' => 'admin@stepdash.com',
            'username' => 'superadmin',
            'password' => 'superadmin',
            'alamat' => 'Bonkop',
            'telepon' => '0123812843',
        ]);
        $SuperAdmin = Role::create(['name' => 'Super Admin']);
        $Driver = Role::create(['name' => 'Driver']);
        $Mekanik = Role::create(['name' => 'Mekanik']);
        $Customer = Role::create(['name' => 'Customer']);

        $SuperAdminAccount->assignRole($SuperAdmin);
    }
}
