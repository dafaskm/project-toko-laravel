<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kosongkan tabel dulu
        DB::table('produk')->truncate();

        // Gunakan DB::table('nama_tabel')->insert()
        DB::table('produk')->insert(
            array(
                [
                    'nama' => 'Buku Tulis Sinar Dunia 38 Lbr',
                    'id_kategori' => 1, // <-- TAMBAHKAN INI
                    'qty' => 100,
                    'harga_beli' => 2500,
                    'harga_jual' => 3500,
                    'created_at' => now(), 
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Pensil Faber-Castell 2B',
                    'id_kategori' => 1, // <-- TAMBAHKAN INI
                    'qty' => 150,
                    'harga_beli' => 3000,
                    'harga_jual' => 4000,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Penghapus Joyko',
                    'id_kategori' => 1, // <-- TAMBAHKAN INI
                    'qty' => 200,
                    'harga_beli' => 1000,
                    'harga_jual' => 1500,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Penggaris Butterfly 30cm', // <-- PERBAIKI INI (dari 'nama_produk')
                    'id_kategori' => 2, // <-- TAMBAHKAN INI (contoh kategori 2)
                    'qty' => 50,
                    'harga_beli' => 2000,
                    'harga_jual' => 3000,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            )
        );
    }
}