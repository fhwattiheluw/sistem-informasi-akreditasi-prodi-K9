<?php

namespace Database\Seeders;

use App\Models\dataKeuangan;
use App\Models\TabelK2BidangPendidikan;
use App\Models\TabelK2BidangPenelitian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // menjalankan faker class user
        \App\Models\User::factory(10)->create();
        // menjalankan faker class data program studi
        \App\Models\dataProgramStudi::factory(1)->create();

        //data keuangan
        dataKeuangan::create([
          'tahun' => 'TS',
          'pendidikan_per_mahasiswa' => 5000,
          'penelitian_per_dosen' => 10000,
          'pkm_per_dosen' => 8000,
          'publikasi_per_dosen' => 1500,
          'investasi' => 250000.50,
          'tautan' => 'https://example.com',
        ]);

        //K2 Kerjasama
        TabelK2BidangPendidikan::create([
            'nama_mitra' => 'Mitra Internasional 1',
            'tingkat' => 'Internasional',
            'judul_ruang_lingkup' => 'Ruang Lingkup Internasional 1',
            'manfaat_output' => 'Manfaat Output Internasional 1',
            'durasi' => 12,
            'tautan' => 'https://example.com/internasional-1',
        ]);

        TabelK2BidangPendidikan::create([
            'nama_mitra' => 'Mitra Nasional 1',
            'tingkat' => 'Nasional',
            'judul_ruang_lingkup' => 'Ruang Lingkup Nasional 1',
            'manfaat_output' => 'Manfaat Output Nasional 1',
            'durasi' => 8,
            'tautan' => '',
        ]);

        TabelK2BidangPenelitian::create([
            'nama_mitra' => 'Mitra Nasional 1',
            'tingkat' => 'Nasional',
            'judul_ruang_lingkup' => 'Ruang Lingkup Nasional 1',
            'manfaat_output' => 'Manfaat Output Nasional 1',
            'durasi' => 8,
            'tautan' => '',
        ]);
        TabelK2BidangPenelitian::create([
            'nama_mitra' => 'Mitra Nasional 3',
            'tingkat' => 'Lokal',
            'judul_ruang_lingkup' => 'Ruang Lingkup Lokal',
            'manfaat_output' => 'Manfaat LOKAL Ambon',
            'durasi' => 4,
            'tautan' => '',
        ]);
        TabelK2BidangPenelitian::create([
            'nama_mitra' => 'Mitra Regional ',
            'tingkat' => 'Internasional',
            'judul_ruang_lingkup' => 'Ruang Lingkup InterLokal',
            'manfaat_output' => 'Manfaat Internasional',
            'durasi' => 4,
            'tautan' => '',
        ]);

    }
}
