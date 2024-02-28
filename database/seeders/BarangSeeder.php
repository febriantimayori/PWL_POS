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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'T-shirt',
                'harga_beli' => 50000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Snack',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Novel',
                'harga_beli' => 50000,
                'harga_jual' => 80000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Peralatan Masak',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 4000000,
                'harga_jual' => 6000000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Jeans',
                'harga_beli' => 80000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Minuman Bersoda',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Buku Pelajaran',
                'harga_beli' => 70000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Alat Dapur',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
