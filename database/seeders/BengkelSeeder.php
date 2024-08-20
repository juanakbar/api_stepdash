<?php

namespace Database\Seeders;

use App\Models\Bengkel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BengkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama' => 'Yamaha JG Cibeureum',
                'alamat' => 'Jl. Cibeureum No.1, Bandung',
                'latitude' => -6.9211200,
                'longitude' => 107.6050300,
            ],
            [
                'nama' => 'Yamaha JG Bandung',
                'alamat' => 'Jl. Gatot Subroto No.9, Bandung',
                'latitude' => -6.9244100,
                'longitude' => 107.6367800,
            ],
            [
                'nama' => 'Yamaha JG Asia Afrika',
                'alamat' => 'Jl. Asia Afrika No.12, Bandung',
                'latitude' => -6.9202300,
                'longitude' => 107.6089500,
            ],
            [
                'nama' => 'Yamaha JG Ciwastra',
                'alamat' => 'Jl. Ciwastra No.14, Bandung',
                'latitude' => -6.9676100,
                'longitude' => 107.6627100,
            ],
            [
                'nama' => 'Yamaha JG Kopo',
                'alamat' => 'Jl. Kopo No.16, Bandung',
                'latitude' => -6.9524100,
                'longitude' => 107.5899200,
            ],
            [
                'nama' => 'Yamaha JG Ujung Berung',
                'alamat' => 'Jl. Ujung Berung No.18, Bandung',
                'latitude' => -6.9275600,
                'longitude' => 107.7234200,
            ],
        ])->each(function ($bengkel) {
            Bengkel::create($bengkel);
        });
    }
}
