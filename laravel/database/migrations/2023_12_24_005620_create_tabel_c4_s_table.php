<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_k4_dtps_keahlian_ps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn_nidk');
            $table->date('tanggal_lahir');
            $table->string('sertifikat_pendidik');
            $table->string('jabatan_fungsional');
            $table->string('gelar_akademik');
            $table->string('pendidikan');
            $table->string('bidang_keahlian');
            $table->string('tautan')->nullable();
            $table->timestamps();
        });
        Schema::create('tabel_k4_dtps_luar_ps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn_nidk');
            $table->date('tanggal_lahir');
            $table->string('sertifikat_pendidik');
            $table->string('jabatan_fungsional');
            $table->string('gelar_akademik');
            $table->string('pendidikan');
            $table->string('bidang_keahlian');
            $table->string('tautan')->nullable();
            $table->timestamps();
        });
        Schema::create('tabel_k4_beban_kerja_dtps', function (Blueprint $table) {
            $table->id();
            $table->string('nidn_nidk');
            $table->integer('sks_ps_sendiri');
            $table->integer('sks_ps_luar');
            $table->integer('sks_pt_luar');
            $table->integer('sks_penelitian');
            $table->integer('sks_p2m');
            $table->integer('sks_manajemen_sendiri');
            $table->integer('sks_manajemen_luar');
            $table->timestamps();

            // $table->foreign('nidn_nidk')->references('nidn_nidk')->on('tabel_dosen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_c4_s');
        Schema::dropIfExists('tabel_k4_dtps_keahlian_ps');
        Schema::dropIfExists('tabel_k4_dtps_luar_ps');
        Schema::dropIfExists('tabel_k4_beban_kerja_dtps');
    }
};
