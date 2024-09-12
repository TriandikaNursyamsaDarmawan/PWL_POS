<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'PAK DAYAT',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2004-10-10',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'PAK SAMSUL',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2004-10-10',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'PAK FARHAN',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2004-10-21',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'PAK MADA',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2004-11-04',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'PAK HABIBI',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2004-12-01',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'PAK KHOLID',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2005-01-12',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'PAK DIKA',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2006-06-11',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'PAK YANTO',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2006-12-12',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'PAK SIDDIQ',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2007-01-01',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'PAK ILHAM',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2007-11-11',
            ],
        ];
        DB::table('t_penjualan')->insert($data);

    }
}
