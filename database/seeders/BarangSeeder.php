<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
                'id_barang' => '1',
                'kode_barang' => 'B0001',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '200'
                ],
                [
                'id_barang' => '2',
                'kode_barang' => 'B0002',
                'nama_barang' => 'Pop Mie',
                'kategori_barang' => 'Makanan',
                'harga' => '14000',
                'qty' => '20'
                ],
                [
                'id_barang' => '3',
                'kode_barang' => 'B0003',
                'nama_barang' => 'Mie Sedap',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '50'
                ],
                [
                'id_barang' => '4',
                'kode_barang' => 'B0004',
                'nama_barang' => 'Sari Roti',
                'kategori_barang' => 'Makanan',
                'harga' => '15000',
                'qty' => '10'
                ],
                [
                'id_barang' => '5',
                'kode_barang' => 'B0005',
                'nama_barang' => 'Roti Sobek',
                'kategori_barang' => 'Makanan',
                'harga' => '10000',
                'qty' => '20'
                ],
                [
                 'id_barang' => '6',
                 'kode_barang' => 'B0006',
                 'nama_barang' => 'Fruit Tea',
                 'kategori_barang' => 'Minuman',
                 'harga' => '7000',
                 'qty' => '40'
                ],
                [
                 'id_barang' => '7',
                 'kode_barang' => 'B0007',
                 'nama_barang' => 'Pocari Sweat',
                 'kategori_barang' => 'Minuman',
                 'harga' => '10000',
                 'qty' => '20'
                ],
                [
                'id_barang' => '8',
                'kode_barang' => 'B0008',
                'nama_barang' => 'Teh Kotak',
                'kategori_barang' => 'Minuman',
                'harga' => '8000',
                'qty' => '50'
                ],
                [
                    'id_barang' => '9',
                    'kode_barang' => 'B0009',
                    'nama_barang' => 'Teh Botol',
                    'kategori_barang' => 'Minuman',
                    'harga' => '10000',
                    'qty' => '30'
                    ],
                    [
                    'id_barang' => '10',
                    'kode_barang' => 'B0010',
                    'nama_barang' => 'CocaCola',
                    'kategori_barang' => 'Minuman',
                    'harga' => '7000',
                    'qty' => '20'
                ],
                [
                    'id_barang' => '11',
                    'kode_barang' => 'B0011',
                    'nama_barang' => 'Oreo',
                    'kategori_barang' => 'Snack',
                    'harga' => '13000',
                    'qty' => '70'
                    ],
                    [
                    'id_barang' => '12',
                    'kode_barang' => 'B0012',
                    'nama_barang' => 'Silverqueen',
                    'kategori_barang' => 'Snack',
                    'harga' => '14000',
                    'qty' => '20'
                    ],
                    [
                    'id_barang' => '13',
                    'kode_barang' => 'B0013',
                    'nama_barang' => 'Better',
                    'kategori_barang' => 'Snack',
                    'harga' => '3000',
                    'qty' => '50'
                    ],
                    [
                    'id_barang' => '14',
                    'kode_barang' => 'B0014',
                    'nama_barang' => 'Super Keju',
                    'kategori_barang' => 'Snack',
                    'harga' => '10000',
                    'qty' => '10'
                    ],
                    [
                    'id_barang' => '15',
                    'kode_barang' => 'B0015',
                    'nama_barang' => 'Cokolatos',
                    'kategori_barang' => 'Snack',
                    'harga' => '1000',
                    'qty' => '20'
                    ],
                    [
                        'id_barang' => '16',
                        'kode_barang' => 'B0016',
                        'nama_barang' => 'Buku',
                        'kategori_barang' => 'Alat Tulis',
                        'harga' => '8000',
                        'qty' => '40'
                        ],
                        [
                        'id_barang' => '17',
                        'kode_barang' => 'B0017',
                        'nama_barang' => 'Bolpoin',
                        'kategori_barang' => 'Alat Tulis',
                        'harga' => '5000',
                        'qty' => '20'
                        ],
                        [
                        'id_barang' => '18',
                        'kode_barang' => 'B0018',
                        'nama_barang' => 'Penghapus',
                        'kategori_barang' => 'Alat Tulis',
                        'harga' => '5000',
                        'qty' => '50'
                        ],
                        [
                        'id_barang' => '19',
                        'kode_barang' => 'B0019',
                        'nama_barang' => 'Pengaris',
                        'kategori_barang' => 'Alat Tulis',
                        'harga' => '10000',
                        'qty' => '10'
                        ],
                        [
                        'id_barang' => '20',
                        'kode_barang' => 'B0020',
                        'nama_barang' => 'Buku Gambar',
                        'kategori_barang' => 'Alat Tulis',
                        'harga' => '10000',
                        'qty' => '20'
                        ]
            ];
            DB::table('barang')->insert($data);
    }
}
