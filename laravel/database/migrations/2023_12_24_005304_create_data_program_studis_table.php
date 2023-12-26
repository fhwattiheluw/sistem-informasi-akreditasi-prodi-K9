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
        Schema::create('data_program_studis', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['S1','S2','S3']);
            $table->string('nama');
            $table->enum('status_peringkat', ['C','B','A','BAIK','BAIK_SEKALI','UNGGUL']);
            $table->string('nomor_sk');
            $table->date('tanggal_sk');
            $table->date('tanggal_kadaluarsa');
            $table->integer('jumlah_mhs_ts');
            $table->integer('jumlah_dtps_ts');
            $table->double('rerata_ipk');
            $table->double('rerata_masa_studi');
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
        Schema::dropIfExists('data_program_studis');
    }
};
