<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Buku Tulis Sinar Dunia',
                'harga' => 3500,
                'stok' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Pulpen Standard AE7',
                'harga' => 2500,
                'stok' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG003',
                'nama_barang' => 'Pensil 2B Faber Castell',
                'harga' => 3000,
                'stok' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG004',
                'nama_barang' => 'Penghapus Joyko',
                'harga' => 2000,
                'stok' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'BRG005',
                'nama_barang' => 'Penggaris 30cm Butterfly',
                'harga' => 5000,
                'stok' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
