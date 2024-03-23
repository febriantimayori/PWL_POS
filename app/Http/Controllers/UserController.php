<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    // public function index() 
    // {
    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }

    public function index() 
    {
        $user = UserModel::with('level')->get();
        return view('user.index', ['data' => $user]);
    }

    public function create() 
    {
        return view('user.create');
    }

    public function store(StorePostRequest $request) : RedirectResponse 
    {
        // The incoming request is valid

        // Retrieve the validated input data
        $validated = $request->validated();

        // Retrieve a portion of the validated input data
        $validated = $request->safe()->only(['username', 'password', 'nama', 'level_id']);
        $validated = $request->safe()->except(['username', 'password', 'nama', 'level_id']);

        // Store the post

        return redirect('/user');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user.user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        
        return redirect('/user');
    }
}