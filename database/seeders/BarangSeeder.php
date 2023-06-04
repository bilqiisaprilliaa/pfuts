<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodeBarang' => 'a',
                'namaBarang' => 'apel',
                'hargaBarang' => '4000',
                'deskripsiBarang'=> 'buah apel fuji merah',
                'satuan_id'=>'1'
            ],
            [
                'kodeBarang' => 'b',
                'namaBarang' => 'lemon',
                'hargaBarang' => '4500',
                'deskripsiBarang'=> 'buah lemon',
                'satuan_id'=>'2'
            ],
            [
                'kodeBarang' => 'c',
                'namaBarang' => 'kiwi',
                'hargaBarang' => '5000',
                'deskripsiBarang'=> 'buah kiwi hijau',
                'satuan_id'=>'3'
            ],
        ]);
    }
}
