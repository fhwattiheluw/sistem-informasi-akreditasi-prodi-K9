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
        Schema::create('tabel_c4_s', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('tabel_c4_s');
        Schema::dropIfExists('tabel_k4_dtps_keahlian_ps');
    }
};
