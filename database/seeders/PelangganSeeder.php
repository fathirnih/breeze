<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            [
                'nama' => 'Andi Pratama',
                'alamat' => 'Jl. Merdeka No. 10'
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Sudirman No. 25'
            ],
            [
                'nama' => 'Citra Lestari',
                'alamat' => 'Jl. Ahmad Yani No. 7'
            ],
            [
                'nama' => 'Dewi Anggraini',
                'alamat' => 'Jl. Gatot Subroto No. 18'
            ],
            [
                'nama' => 'Eko Saputra',
                'alamat' => 'Jl. Diponegoro No. 3'
            ],
        ]);
    }
}
