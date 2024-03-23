<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;

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

    public function store(StorePostRequest $request) : RedirectResponse
    {
        // The incoming request is valid

        // Retrieve the validated input data
        $validated = $request->validated();

        // Retrieve a portion of the validated input data
        $validated = $request->safe()->only(['levelKode', 'levelNama']);
        $validated = $request->safe()->except(['levelKode', 'levelNama']);

        // Store the post

        return redirect('/level');
    }

    public function tambah_simpan(Request $request)
    {
        DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', [$request->level_kode, $request->level_nama, now()]);
        return redirect('/level');
    }
}