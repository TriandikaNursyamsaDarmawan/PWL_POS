<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'level_id' => 1,
                'level_kode' => 'B001',
                'level_nama' => 'TEKSTIL',
            ],
            [
                'level_id' => 2,
                'level_kode' => 'B002',
                'level_nama' => 'TEMBAKAU',
            ],
            [
                'level_id' => 3,
                'level_kode' => 'B003',
                'level_nama' => 'PLASTIK',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
