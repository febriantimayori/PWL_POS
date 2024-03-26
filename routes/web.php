<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

//Route Kategori
Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index'])->name('/kategori');

    //Create Kategori
    Route::get('/create', [KategoriController::class, 'create'])->name('/kategori/create');

    //Store Kategori
    Route::post('/', [KategoriController::class, 'store'])->name('/kategori/store');

    //Edit Kategori
    Route::get('/update/{id}', [KategoriController::class, 'update'])->name('/kategori/update');
    Route::put('/update_simpan/{id}', [KategoriController::class, 'update_simpan'])->name('/kategori/update_simpan');

    //Delete Kategori
    Route::get('/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');
});


//Route User
// Route::prefix('user')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('/user');

//     //Create User
//     Route::get('/create', [UserController::class, 'create'])->name('/user/create');

//     //Store User
//     Route::post('/', [UserController::class, 'store'])->name('/user/store');

//     //Edit User
//     Route::get('/update/{id}', [UserController::class, 'update'])->name('/user/update');
//     Route::put('/update_simpan/{id}', [UserController::class, 'update_simpan'])->name('/user/update_simpan');

//     //Delete User
//     Route::get('/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');
// });

//Route Level
Route::prefix('level')->group(function () {
    Route::get('/', [LevelController::class, 'index'])->name('/level');

    //Create Level
    Route::get('/create', [LevelController::class, 'create'])->name('/level/create');

    //Store Level
    Route::post('/', [LevelController::class, 'store'])->name('/level/store');

    //Edit Level
    Route::get('/update/{id}', [LevelController::class, 'update'])->name('/level/update');
    Route::put('/update_simpan/{id}', [LevelController::class, 'update_simpan'])->name('/level/update_simpan');

    //Delete Level
    Route::get('/delete/{id}', [LevelController::class, 'delete'])->name('/level/delete');
});

//Route m_user
Route::resource('m_user', POSController::class);

//JS 7
Route::get('/', [WelcomeController::class, 'index']);

//JS 7 - User
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); //menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); //menampilkan data user dalam bentuk json untuk database
    Route::get('create', [UserController::class, 'create']); //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); //menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']); //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); //menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); //menghapus data user
});