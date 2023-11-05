<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_barang' => 'Baju bola putih moti kotak',
            'stok_barang' => 10,
            'harga_barang' => 80000,
            'keterangan'=>'Baju bola warna putih dengan motf batik kotak warna hitam ukuran XL ',
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time())
        ]);
    }
}
