<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'stok_id' => 1,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 2,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 1,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 6,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 11,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 12,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 13,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 11,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 15,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 1,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2001-11-10',
                'stok_jumlah' => 5,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
