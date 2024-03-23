<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only('kategori_kode', 'kategori_nama');
        $validated = $request->safe()->except('kategori_kode', 'kategori_nama');

        return redirect('/kategori');
    }
    
    // public function store(Request $request)
    // {
    //     $validated = $request->validate(
    //         [
    //             'kodeKategori' => 'bail|required|unique:m_kategori,kategori_kode',
    //             'namaKategori' => 'required'
    //         ]
    //     );

    //     if (!$validated) {
    //         return redirect('/kategori/create')->withInput()->withErrors($validated);
    //     }

    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori
    //     ]);

    //     return redirect('/kategori');
    // }

    public function update($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.kategori_update', ['data' => $kategori]);
    }

    public function update_simpan($id, Request $request)
    {
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

}