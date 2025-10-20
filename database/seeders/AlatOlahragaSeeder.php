<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Penting

class AlatOlahragaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel dulu
        DB::table('alat_olahraga')->truncate();

        DB::table('alat_olahraga')->insert(
            array(
                [
                    'nama_produk' => 'Raket Badminton Yonex',
                    'stok' => 50,
                    'harga_beli' => 250000,
                    'harga_jual' => 300000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama_produk' => 'Shuttlecock (Isi 12)',
                    'stok' => 100,
                    'harga_beli' => 75000,
                    'harga_jual' => 85000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama_produk' => 'Bola Basket Spalding',
                    'stok' => 30,
                    'harga_beli' => 150000,
                    'harga_jual' => 175000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama_produk' => 'Tali Skipping Kettler',
                    'stok' => 75,
                    'harga_beli' => 40000,
                    'harga_jual' => 50000,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }
}