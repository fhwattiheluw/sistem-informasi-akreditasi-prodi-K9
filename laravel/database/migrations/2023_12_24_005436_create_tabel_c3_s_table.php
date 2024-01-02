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
        Schema::create('tabel_c3_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('tabel_k3_mahasiswa_reguler', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_akademik')->unique();
            $table->integer('daya_tampung');
            $table->integer('pendaftar');
            $table->integer('lulus_seleksi');
            $table->integer('jum_mahasiswa_baru');
            $table->integer('total');
            $table->string('tautan')->nullable();
            $table->timestamps();
        });

        Schema::create('tabel_k3_mhs_dalam_negeri', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_akademik')->unique();
            $table->integer('jumlah_provinsi');
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->integer('total_mahasiswa');
            $table->string('tautan')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_c3_s');
        Schema::dropIfExists('tabel_k3_mahasiswa_reguler');
        Schema::dropIfExists('tabel_k3_mhs_dalam_negeri');
    }
};
