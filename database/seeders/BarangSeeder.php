<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama_barang' => 'Baju',
                'harga' => '50000',
            ],
            [
                'nama_barang' => 'Celana',
                'harga' => '75000',
            ],
        ])->each(function ($data) {
            Barang::create($data);
        });
    }
}
