<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pemain;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 50),
                'posisi' => fake()->sentence(),
            ]);
        }
    }
}
