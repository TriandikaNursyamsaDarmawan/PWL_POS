<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';*/

        //$row = DB:: table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        //return 'Update data berhasil. Jumalh data yang di update: '.$row.' baris';

        //$row = DB::update('delete from m_kategori where kategori_kode = ?', ['Camilan']);
        //return 'delete data berhasil. Jumlah data yang di hapus: '.$row. 'baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
}
}
