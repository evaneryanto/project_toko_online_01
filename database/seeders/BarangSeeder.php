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
        $arr = [
            [
                'nama_barang' => 'Baju bola putih motif kotak',
                'stok_barang' => 10,
                'harga_barang' => 80000,
                'gambar' => 'baju_01.jpeg',
                'keterangan'=>'Baju bola warna putih dengan motf batik kotak warna hitam ukuran XL ',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time())
            ],
            [
                'nama_barang' => 'Baju bola putih motif spiral',
                'stok_barang' => 15,
                'harga_barang' => 70000,
                'gambar' => 'baju_02.jpeg',
                'keterangan'=>'Baju bola warna putih dengan motf spiral warna merah ukuran XXL ',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time())
            ],
            [
                'nama_barang' => 'Baju bola hitam motif spiral ungu',
                'stok_barang' => 20,
                'harga_barang' => 90000,
                'gambar' => 'baju_03.jpeg',
                'keterangan'=>'Baju bola warna hitam dengan motif spiral ungu ukuran XXL ',
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time())
            ]
            
        ];
        foreach($arr as $key=> $row){
           Barang::create($row);
       }
      
    }
}
