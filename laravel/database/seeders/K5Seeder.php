<?php

namespace Database\Seeders;

use App\Models\TabelK5PrasaranPendidikan;
use App\Models\TabelK5SaranaPendidikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class K5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        TabelK5SaranaPendidikan::create([
            'jenis_sarana' => 'Meja Kantor',
            'kualitas' => 'Baik',
            'kondisi' => 'terawat',
            'unit_pengelola' => 'PS',
            'tautan' => '#',
        ]);
        TabelK5SaranaPendidikan::create([
            'jenis_sarana' => 'Meja Kantor',
            'jumlah_unit' => 2,
            'kualitas' => 'Kurang Baik',
            'kondisi' => 'terawat',
            'unit_pengelola' => 'UPPS',
            'tautan' => '#',
        ]);
        TabelK5PrasaranPendidikan::create([
            'jenis_prasarana' => 'Gedung HALL',
            'jumlah_unit' => '2',
            'luas' => 120, 
        ]);
    }
}
