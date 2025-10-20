<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Penting

class AlatKosmetikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel dulu
        DB::table('alat_kosmetik')->truncate();

        DB::table('alat_kosmetik')->insert(
            array(
                [
                    'nama' => 'Lipstick Matte Wardah',
                    'qty' => 100,
                    'harga_beli' => 45000,
                    'harga_jual' => 55000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Foundation Maybelline Fit Me',
                    'qty' => 80,
                    'harga_beli' => 120000,
                    'harga_jual' => 145000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Mascara L\'Oreal Voluminous',
                    'qty' => 60,
                    'harga_beli' => 90000,
                    'harga_jual' => 110000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Eyeliner Spidol Make Over',
                    'qty' => 75,
                    'harga_beli' => 85000,
                    'harga_jual' => 100000,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }
}