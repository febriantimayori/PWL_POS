<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // <-- Insert data -->
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);

        // return 'Insert data baru berhasil';

        // <-- Update data -->
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row. ' baris';

        // <-- Delete data -->
        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row. ' baris';

        //menampilkan data
        $data = DB::select('select * from m_level');
        return view('level.index', ['data' => $data]);
    }

    public function create()
    {
        return view('level.create');
    }

    public function tambah_simpan(Request $request)
    {
        DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', [$request->level_kode, $request->level_nama, now()]);
        return redirect('/level');
    }
}