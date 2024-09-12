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
        $data =[
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_nama' => 'TEH PUCUK',
                'barang_kode' => 'BRG001',
                'harga_beli' => 1500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_nama' => 'SUSU',
                'barang_kode' => 'BRG002',
                'harga_beli' => 2000,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_nama' => 'EXTRAJOSS',
                'barang_kode' => 'BRG003',
                'harga_beli' => 1250,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_nama' => 'JOSHUA',
                'barang_kode' => 'BRG004',
                'harga_beli' => 1750,
                'harga_jual' => 4500,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_nama' => 'TEH BOTOL',
                'barang_kode' => 'BRG005',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
            //
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_nama' => 'MIE INSTAN',
                'barang_kode' => 'BRG006',
                'harga_beli' => 1500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_nama' => 'BERAS',
                'barang_kode' => 'BRG007',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_nama' => 'TELUR',
                'barang_kode' => 'BRG008',
                'harga_beli' => 1500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_nama' => 'SAYUR',
                'barang_kode' => 'BRG009',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_nama' => 'SEAFOOD',
                'barang_kode' => 'BRG010',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            //
            [
                'barang_id' => 11,
                'kategori_id' => 5,
                'barang_nama' => 'MIO',
                'barang_kode' => 'BRG011',
                'harga_beli' => 15000000,
                'harga_jual' => 30000000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_nama' => 'BEAT',
                'barang_kode' => 'BRG012',
                'harga_beli' => 200000000,
                'harga_jual' => 250000000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_nama' => 'VARIO',
                'barang_kode' => 'BRG013',
                'harga_beli' => 35000000,
                'harga_jual' => 45000000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_nama' => 'SUZUKI',
                'barang_kode' => 'BRG014',
                'harga_beli' => 75000000,
                'harga_jual' => 85000000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_nama' => 'SCOOPY',
                'barang_kode' => 'BRG015',
                'harga_beli' => 4500000,
                'harga_jual' => 5000000,
            ],

        ];
        DB::table('m_barang')->insert($data);
    }
}
