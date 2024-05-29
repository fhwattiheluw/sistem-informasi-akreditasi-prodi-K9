<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TabelK9MasaStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masaStudi = [
            ['dosen_id' => '1', 'nama_mahasiswa' => 'Mahasiswa 1', 'nama_produk' => 'Produk 1', 'deskripsi' => 'Deskripsi 1', 'tautan' => 'http://example.com/1', 'prodi_id' => 123],
            ['dosen_id' => '1', 'nama_mahasiswa' => 'Mahasiswa 2', 'nama_produk' => 'Produk 2', 'deskripsi' => 'Deskripsi 2', 'tautan' => 'http://example.com/2', 'prodi_id' => 123],
            ['dosen_id' => '2', 'nama_mahasiswa' => 'Mahasiswa 3', 'nama_produk' => 'Produk 3', 'deskripsi' => 'Deskripsi 3', 'tautan' => 'http://example.com/3', 'prodi_id' => 123],
            ['dosen_id' => '2', 'nama_mahasiswa' => 'Mahasiswa 4', 'nama_produk' => 'Produk 4', 'deskripsi' => 'Deskripsi 4', 'tautan' => 'http://example.com/4', 'prodi_id' => 123],
            ['dosen_id' => '3', 'nama_mahasiswa' => 'Mahasiswa 5', 'nama_produk' => 'Produk 5', 'deskripsi' => 'Deskripsi 5', 'tautan' => 'http://example.com/5', 'prodi_id' => 123]
        ];

        DB::table('tabel_k9_masa_studis')->insert($masaStudi);
    }
}
