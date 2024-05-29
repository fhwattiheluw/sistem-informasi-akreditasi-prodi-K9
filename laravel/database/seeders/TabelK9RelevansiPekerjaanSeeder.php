<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TabelK9RelevansiPekerjaan;

class TabelK9RelevansiPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TabelK9RelevansiPekerjaan::create([
            'tahun_lulus' => date('Y'),
            'jumlah_lulusan' => '100',
            'jumlah_terlacak' => '50',
            'relevansi' => 'tinggi',
            'tautan' => 'https://www.google.com',
            'prodi_id' => 123,
        ]);

        TabelK9RelevansiPekerjaan::create([
            'tahun_lulus' => date('Y') - 1,
            'jumlah_lulusan' => '80',
            'jumlah_terlacak' => '40',
            'relevansi' => 'sedang',
            'tautan' => 'https://www.bing.com',
            'prodi_id' => 123,
        ]);

        TabelK9RelevansiPekerjaan::create([
            'tahun_lulus' => date('Y') - 2,
            'jumlah_lulusan' => '60',
            'jumlah_terlacak' => '30',
            'relevansi' => 'rendah',
            'tautan' => 'https://www.yahoo.com',
            'prodi_id' => 123,
        ]);
    }
}
