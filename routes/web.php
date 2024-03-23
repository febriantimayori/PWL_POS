<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Level
Route::get('/level', [LevelController::class, 'index'])->name('/level/create');

//Create Level
Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
//Store Level
Route::post('/level', [LevelController::class, 'store']);

Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan'])->name('/level/tambah_simpan');

//Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('/kategori');

//Create Kategori
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
//Store Kategori
Route::post('/kategori', [KategoriController::class, 'store']);

//Edit Kategori
Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('/kategori/update');
Route::put('/kategori/update_simpan/{id}', [KategoriController::class, 'update_simpan'])->name('/kategori/update_simpan');

//Delete Kategori
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');

//User
Route::get('/user', [UserController::class, 'index'])->name('/user');

//Store User
Route::post('/user', [UserController::class, 'store']);

//Add User
Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');

//Update User
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

//Delete User
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

//Route m_user
Route::resource('m_user', POSController::class);