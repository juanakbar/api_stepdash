<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Bengkel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Layanan;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'password' => Bcrypt('superadmin'),
            'alamat' => 'Bonkop',
            'telepon' => '0123812843',
        ]);
        $JuanAccount = User::create([
            'nama' => 'Ganang Priyambodo',
            'email' => 'ganang@stepdash.com',
            'username' => 'ganang',
            'password' =>  Bcrypt('ganang'),
            'alamat' => 'Pesntren',
            'telepon' => '0123812843',
        ]);
        $DriverAccount = User::create([
            'nama' => 'Driver',
            'email' => 'driver@stepdash.com',
            'username' => 'Driver',
            'password' =>  Bcrypt('driver'),
            'alamat' => 'Driver',
            'telepon' => '01238128431',
        ]);
        $MekanikAccount = User::create([
            'nama' => 'Mekanik',
            'email' => 'mekanik@stepdash.com',
            'username' => 'Mekanik',
            'password' =>  Bcrypt('mekanik'),
            'alamat' => 'Mekanik',
            'telepon' => '01238128431',
        ]);

        $layanan1 = Layanan::create([
            'nama_layanan' => 'Step Motor',
        ]);
        $layanan2 = Layanan::create([
            'nama_layanan' => 'Bengkel',
        ]);

        $SuperAdmin = Role::create(['name' => 'Super Admin']);
        $Driver = Role::create(['name' => 'Driver']);
        $Mekanik = Role::create(['name' => 'Mekanik']);
        $Customer = Role::create(['name' => 'Customer']);

        $SuperAdminAccount->assignRole($SuperAdmin);
        $JuanAccount->assignRole($Customer);
        $DriverAccount->assignRole($Driver);
        $MekanikAccount->assignRole($Mekanik);
        $this->call([
            BengkelSeeder::class,
            // LayananSeeder::class,
        ]);


        $orders = [];
        $statuses = ['pending', 'accepted', 'on_the_way', 'completed', 'cancelled'];

        for ($i = 0; $i < 1000; $i++) {
            $created_at = Carbon::now()->subDays(rand(0, 5))->toDateTimeString();
            $orders[] = [
                'id_layanan' => rand(1, 2), // Random ID Layanan
                'id_user' => 2, // user_id 2
                'id_driver' => 3, // driver_id 3
                'pickup' => Str::random(10), // Random pickup address
                'dropoff' => Str::random(10), // Random dropoff address
                'status' => $statuses[array_rand($statuses)], // Random status
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ];
        }
        for ($i = 0; $i < 50; $i++) {
            $created_at = Carbon::now()->subDays(rand(0, 5))->toDateTimeString();
            $pembayarans[] = [
                'order_id' => rand(1, 1000), // Random order_id
                'total' => rand(10000, 50000), // Random total amount
            ];
        }
        // Insert all data into the orders table at once
        DB::table('orders')->insert($orders);
        DB::table('pembayarans')->insert($pembayarans);
    }
}
