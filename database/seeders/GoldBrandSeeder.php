<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GoldBrand;

class GoldBrandSeeder extends Seeder
{
    public function run(): void
    {
        GoldBrand::insert([
            [
                'name' => 'Antam',
                'code' => 'ANTAM',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'UBS',
                'code' => 'UBS',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Galeri24',
                'code' => 'GAL24',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}