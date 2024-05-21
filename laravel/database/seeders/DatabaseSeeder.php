<?php

namespace Database\Seeders;

use App\Models\dataKeuangan;
use App\Models\TabelDosen;
use App\Models\TabelK2BidangKelembagaan;
use App\Models\TabelK2BidangPendidikan;
use App\Models\TabelK2BidangPenelitian;
use App\Models\TabelK2BidangPkm;
use App\Models\TabelK3LayananPembinaanMahasiswa;
use App\Models\TabelK3MahasiswaDalamNegeri;
use App\Models\TabelK3MahasiswaLuarNegeri;
use App\Models\TabelK3MahasiswaReguler;
use App\Models\TabelK4BebanKerjaDTPS;
use App\Models\TabelK4BimbinganTA;
use App\Models\TabelK4DtpsKeahlianPS;
use App\Models\TabelK4DtpsLuarPS;
use App\Models\TabelK4KegiatanMengajar;
use App\Models\TabelK4KompetensiTendik;
use App\Models\TabelK4PengembanganKompetensiDTPS;
use App\Models\TabelK4PrestasiDTPS;
use App\Models\TabelK4Tendik;
use App\Models\TabelK5SaranaPendidikan;
use App\Models\TabelMatakuliah;
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
        
        // menjalankan faker class data program studi
        \App\Models\dataProgramStudi::factory(1)->create();
        \App\Models\dataProgramStudi::factory()->prodiBahasaArab()->create();
        
      // menjalankan faker class user
        \App\Models\User::factory(1)->create();
        \App\Models\User::factory()->AdminProdiBahasaArab()->create();
        

        $this->call(K5Seeder::class);
        

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


        TabelK2BidangPkm::create([
            'nama_mitra' => 'Mitra PKM Mltinasional ',
            'tingkat' => 'Internasional',
            'judul_ruang_lingkup' => 'Ruang Lingkup InterLokal',
            'manfaat_output' => 'Manfaat Internasional',
            'durasi' => 4,
            'tautan' => '',
        ]);
        TabelK2BidangPkm::create([
            'nama_mitra' => 'Mitra PKM Regional ',
            'tingkat' => 'Lokal',
            'judul_ruang_lingkup' => 'Ruang Lingkup InterLokal',
            'manfaat_output' => 'Manfaat Internasional',
            'durasi' => 2,
            'tautan' => '',
        ]);

        TabelK2BidangKelembagaan::create([
            'nama_mitra' => 'Kerjasama Antar Institut',
            'tingkat' => 'Lokal',
            'judul_ruang_lingkup' => 'Ruang Lingkup Regional X',
            'manfaat_output' => 'Manfaat Pengembangan Kelembagaan',
            'durasi' => 2,
            'tautan' => '',
        ]);
        TabelK2BidangKelembagaan::create([
            'nama_mitra' => 'IAIN Se Indonesia Timur',
            'tingkat' => 'Nasional',
            'judul_ruang_lingkup' => 'Regional X',
            'manfaat_output' => 'Manfaat Pengembangan Kelembagaan',
            'durasi' => 4,
            'tautan' => '',
        ]);

        TabelK3MahasiswaReguler::create([
            'tahun_akademik' => 2023,
            'daya_tampung' => 200,
            'pendaftar' => 250, 
            'lulus_seleksi' => 200,
            'jum_mahasiswa_baru' => 180,
            'total' => 200
        ]);
        TabelK3MahasiswaReguler::create([
            'tahun_akademik' => 2022,
            'daya_tampung' => 200,
            'pendaftar' => 350, 
            'lulus_seleksi' => 210,
            'jum_mahasiswa_baru' => 190,
            'total' => 200
        ]);
        TabelK3MahasiswaReguler::create([
            'tahun_akademik' => 2021,
            'daya_tampung' => 220,
            'pendaftar' => 350, 
            'lulus_seleksi' => 210,
            'jum_mahasiswa_baru' => 190,
            'total' => 200
        ]);

        TabelK3MahasiswaDalamNegeri::create([
            'tahun_akademik' => 2023,
            'jumlah_provinsi' => 2,
            'laki_laki' => 20,
            'perempuan' => 20,
            'total_mahasiswa' => 120
        ]);
        TabelK3MahasiswaDalamNegeri::create([
            'tahun_akademik' => 2022,
            'jumlah_provinsi' => 3,
            'laki_laki' => 100,
            'perempuan' => 200,
            'total_mahasiswa' => 300
        ]);
        TabelK3MahasiswaLuarNegeri::create([
            'tahun_akademik' => 2021,
            'jumlah_provinsi' => 3,
            'laki_laki' => 100,
            'perempuan' => 200,
            'total_mahasiswa' => 300
        ]);
        TabelK3MahasiswaLuarNegeri::create([
            'tahun_akademik' => 2023,
            'jumlah_provinsi' => 2,
            'laki_laki' => 100,
            'perempuan' => 200,
            'total_mahasiswa' => 300
        ]);
        TabelK3LayananPembinaanMahasiswa::create([
            'tahun_akademik' => 2021,
            'minat' => 3,
            'bakat' => 200,
            'penalaran' => 200,
            'kesejahteraan' => 200,
            'keprofesian' => 200
        ]);
        TabelK3LayananPembinaanMahasiswa::create([
            'tahun_akademik' => 2023,
            'minat' => 4,
            'bakat' => 20,
            'penalaran' => 2,
            'kesejahteraan' => 2,
            'keprofesian' => 2
        ]);

        TabelK4DtpsKeahlianPS::create([
            'nama' => 'Jono',
            'nidn_nidk' => '3',
            'tanggal_lahir' => '1997-01-01',
            'sertifikat_pendidik' => 'ada',
            'jabatan_fungsional' => 'Lektor',
            'gelar_akademik' => 'Doktor',
            'pendidikan' => 'S1 Sistem Informasi, S2 Teknik Informatika, S3 Manajemen pendidikan',
            'bidang_keahlian' => 'Manajemen Pendidikan', 
            'sesuai_ps' => 'tidak', 
        ]);
        TabelDosen::create([
            'nama' => 'Lono',
            'nidn_nidk' => '1',
            'tanggal_lahir' => '1994-01-01',
            'sertifikat_pendidik' => 'ada',
            'jabatan_fungsional' => 'Lektor',
            'gelar_akademik' => 'S3',
            'pendidikan' => 'S1 Sistem Informasi, S2 Teknik Informatika, S3 Manajemen pendidikan',
            'bidang_keahlian' => 'Manajemen Pendidikan', 
            'sesuai_ps' => 'ya', 
        ]);
        TabelDosen::create([
            'nama' => 'Joni',
            'nidn_nidk' => '2',
            'tanggal_lahir' => '1993-01-01',
            'sertifikat_pendidik' => 'belum ada',
            'jabatan_fungsional' => 'Lektor Kepala',
            'gelar_akademik' => 'S3',
            'pendidikan' => 'S1 Sistem Informasi, S2 Teknologi Informasi, S3 Manajemen Sistem Informasi',
            'bidang_keahlian' => 'Teknologi Informasi', 
            'sesuai_ps' => 'ya', 
        ]);
        TabelDosen::create([
            'nama' => 'Joni',
            'nidn_nidk' => '4',
            'tanggal_lahir' => '1993-01-01',
            'sertifikat_pendidik' => 'belum ada',
            'jabatan_fungsional' => 'Lektor Kepala',
            'gelar_akademik' => 'S3',
            'pendidikan' => 'S1 Sistem Informasi, S2 Teknologi Informasi, S3 Manajemen Sistem Informasi',
            'bidang_keahlian' => 'Teknologi Informasi', 
            'sesuai_ps' => 'tidak', 
        ]);
        TabelDosen::create([
            'nama' => 'Joni',
            'nidn_nidk' => '5',
            'tanggal_lahir' => '1993-01-01',
            'sertifikat_pendidik' => 'belum ada',
            'jabatan_fungsional' => 'Lektor Kepala',
            'gelar_akademik' => 'S3',
            'pendidikan' => 'S1 Sistem Informasi, S2 Teknologi Informasi, S3 Manajemen Sistem Informasi',
            'bidang_keahlian' => 'Teknologi Informasi', 
            'sesuai_ps' => 'tidak', 
        ]);

        TabelK4BebanKerjaDTPS::create([
            'nidn_nidk' => '1',
            'sks_ps_sendiri' => '3',
            'sks_ps_luar' => '3',
            'sks_pt_luar' => '3',
            'sks_penelitian' => '3',
            'sks_p2m' => '3',
            'sks_manajemen_sendiri' => '3',
            'sks_manajemen_luar' => '3',
        ]);
        TabelK4BebanKerjaDTPS::create([
            'nidn_nidk' => '2',
            'sks_ps_sendiri' => '3',
            'sks_ps_luar' => '3',
            'sks_pt_luar' => '3',
            'sks_penelitian' => '3',
            'sks_p2m' => '3',
            'sks_manajemen_sendiri' => '3',
            'sks_manajemen_luar' => '3',
        ]);
        TabelK4BebanKerjaDTPS::create([
            'nidn_nidk' => '3',
            'sks_ps_sendiri' => '3',
            'sks_ps_luar' => '3',
            'sks_pt_luar' => '3',
            'sks_penelitian' => '3',
            'sks_p2m' => '3',
            'sks_manajemen_sendiri' => '3',
            'sks_manajemen_luar' => '3',
        ]);
        TabelK4KegiatanMengajar::create([
            'nidn_nidk' => '3',
            'jumlah_kelas' => '3',
            'kode_mk' => '1',
            'jum_pertemuan_rencana' => 16,
            'jum_pertemuan_terlaksana' => 16,
            'semester' => 'Gasal',
        ]);
        TabelK4KegiatanMengajar::create([
            'nidn_nidk' => '2',
            'jumlah_kelas' => '2',
            'kode_mk' => '2',
            'jum_pertemuan_rencana' => 16,
            'jum_pertemuan_terlaksana' => 16,
            'semester' => 'Gasal',
        ]);
        TabelK4KegiatanMengajar::create([
            'nidn_nidk' => '2',
            'jumlah_kelas' => '2',
            'kode_mk' => '3',
            'jum_pertemuan_rencana' => 16,
            'jum_pertemuan_terlaksana' => 16,
            'semester' => 'Genap',
        ]);

        TabelK4BimbinganTA::create([
            'nidn_nidk' => '2',
            'ts_2' => '2',
            'ts_1' => '2',
            'ts' => '3',
            'tautan' => '#',
        ]);
        TabelK4BimbinganTA::create([
            'nidn_nidk' => '1',
            'ts_2' => '2',
            'ts_1' => '3',
            'ts' => '1',
            'tautan' => '#',
        ]);
        TabelK4BimbinganTA::create([
            'nidn_nidk' => '3',
            'ts_2' => '2',
            'ts_1' => '2',
            'ts' => '2',
            'tautan' => '#',
        ]);
        TabelK4PrestasiDTPS::create([
            'nidn_nidk' => '3',
            'prestasi' => "Keynote Speaker Seminar Internasional Jenis Ikan Dasar",
            'tahun' => '2023',
            'tautan' => "http://www.iainambon.ac.id/",
        ]);
        TabelK4PrestasiDTPS::create([
            'nidn_nidk' => '3',
            'prestasi' => "Keynote Speaker Seminar Nasional Jenis Ikan Dasar",
            'tahun' => '2023',
            'tingkat' => 'Nasional',
            'tautan' => "http://www.iainambon.ac.id/",
        ]);
        TabelK4PengembanganKompetensiDTPS::create([ 
            'nidn_nidk' => '3',
            'bidang_keahlian' => 'Pendidikan',
            'nama_kegiatan' => 'PPG',
            'tempat' => 'IAIN Ambon',
            'waktu' => '2024-02-01',
            'manfaat' => 'Pengembangan diri',
            'tautan' => '#',
        ]);
        TabelK4PengembanganKompetensiDTPS::create([ 
            'nidn_nidk' => '2',
            'bidang_keahlian' => 'Pendidikan',
            'nama_kegiatan' => 'PPG',
            'tempat' => 'IAIN Ambon',
            'waktu' => '2023-02-01',
            'manfaat' => 'Pengembangan diri',
            'tautan' => '#',
        ]);
        TabelK4PengembanganKompetensiDTPS::create([ 
            'nidn_nidk' => '2',
            'bidang_keahlian' => 'Pendidikan',
            'nama_kegiatan' => 'PPG',
            'tempat' => 'IAIN Ambon',
            'waktu' => '2024-02-01',
            'manfaat' => 'Pengembangan diri',
            'tautan' => '#',
        ]);
        TabelK4Tendik::create([
            'id_tendik'=>'11',
            'nama'=>'Andi Bedu',
            'status'=>'PNS',
            'bidang_keahlian'=>'Administrasi',
            'pendidikan'=>'Diploma',
            'unit_kerja'=>'PS',
            'tautan'=>'#',
        ]);
        TabelK4Tendik::create([
            'id_tendik'=>'22',
            'nama'=>'Mas Toni',
            'status'=>'Non PNS',
            'bidang_keahlian'=>'Laboran',
            'pendidikan'=>'S1',
            'unit_kerja'=>'UPPS',
            'tautan'=>'#',
        ]);
        TabelK4Tendik::create([
            'id_tendik'=>'33',
            'nama'=>'UDA Sederhana',
            'status'=>'Pegawai tetap Kontrak',
            'bidang_keahlian'=>'Laboran',
            'pendidikan'=>'S1',
            'unit_kerja'=>'PT',
            'tautan'=>'#',
        ]);
        TabelK4KompetensiTendik::create([
            'id_tendik' => '11',
            'nama_kegiatan' => 'Pelatihan kompetensi penguasaan IT',
            'waktu_mulai' => '2024-01-01',
            'waktu_selesai' => '2024-01-10',
            'tempat' => 'ITB Stikom Ambon',
            'tautan' => '#',
        ]);
        TabelK4KompetensiTendik::create([
            'id_tendik' => '22',
            'nama_kegiatan' => 'Pelatihan kompetensi penguasaan IT',
            'waktu_mulai' => '2023-03-06',
            'waktu_selesai' => '2023-03-10',
            'tempat' => 'ITB Stikom Ambon',
            'tautan' => '#',
        ]);
        TabelK4KompetensiTendik::create([
            'id_tendik' => '33',
            'nama_kegiatan' => 'Pelatihan kompetensi penguasaan IT',
            'waktu_mulai' => '2023-08-07',
            'waktu_selesai' => '2023-08-10',
            'tempat' => 'ITB Stikom Ambon',
            'tautan' => '#',
        ]);

        TabelMatakuliah::create([
            'kode_mk' => '1',
            'nama' => 'Pengantar Tauhid',
            'sks' => 3,
        ]);
        TabelMatakuliah::create([
            'kode_mk' => '2',
            'nama' => 'Pengantar Tauhid 2',
            'sks' => 3,
        ]);
        TabelMatakuliah::create([
            'kode_mk' => '3',
            'nama' => 'Fiqih Kontemporer',
            'sks' => 3,
        ]);
    }
}
