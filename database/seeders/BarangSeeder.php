<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            [
                'nama_barang' => 'Anesthesia Machine'
            ],
            [
                'nama_barang' => 'Baby Incubator'
            ],
            [
                'nama_barang' => 'Lampu Operasi'
            ],
            [
                'nama_barang' => 'Meja Operasi'
            ],
            [
                'nama_barang' => 'Suction Pump'
            ],
            [
                'nama_barang' => 'USG Makna & D'
            ],
            [
                'nama_barang' => 'Electro Surgery'
            ],
        ];

        Barang::insert($barang);
    }
}