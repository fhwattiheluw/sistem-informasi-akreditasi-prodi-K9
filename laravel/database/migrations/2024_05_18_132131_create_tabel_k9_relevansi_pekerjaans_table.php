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
        Schema::create('tabel_k9_relevansi_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->enum('tahun_lulus',['ts_6','ts_5','ts_4','ts_3']);
            $table->string('jumlah_lulusan');
            $table->string('jumlah_terlacak');
            $table->enum('relevansi',['tinggi','sedang','rendah']);
            $table->string('tautan');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('data_program_studis')->onDelete('cascade');
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
        Schema::dropIfExists('tabel_k9_relevansi_pekerjaans');
    }
};
