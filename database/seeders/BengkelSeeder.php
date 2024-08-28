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
                'latitude' => -6.902095026872614,
                'longitude' => 107.56428580831283,
            ],
            [
                'nama' => 'Yamaha JG Bandung',
                'alamat' => 'Jl. Gatot Subroto No.9, Bandung',
                'latitude' => -6.933267945785216,
                'longitude' => 107.62216658100044,
            ],
            [
                'nama' => 'Yamaha JG Asia Afrika',
                'alamat' => 'Jl. Asia Afrika No.12, Bandung',
                'latitude' => 6.9198056728056,
                'longitude' => 107.61564344898677,
            ],
            [
                'nama' => 'Yamaha JG Ciwastra',
                'alamat' => 'Jl. Ciwastra No.14, Bandung',
                'latitude' => -6.9526517378368045,
                'longitude' => 107.65606427363407,
            ],
            [
                'nama' => 'Yamaha JG Kopo',
                'alamat' => 'Jl. Kopo No.16, Bandung',
                'latitude' => -6.953492734704103,
                'longitude' => 107.58184805089657,
            ],
            [
                'nama' => 'Yamaha JG Ujung Berung',
                'alamat' => 'Jl. Ujung Berung No.18, Bandung',
                'latitude' => -6.914513114020084,
                'longitude' => 107.70625745774045,
            ],
        ])->each(function ($bengkel) {
            Bengkel::create($bengkel);
        });
    }
}
