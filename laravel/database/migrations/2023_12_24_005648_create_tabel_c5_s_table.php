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
        Schema::create('tabel_c5_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('tabel_k5_sarana_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sarana');
            $table->integer('jumlah_unit');
            $table->enum('kualitas', ['Baik', 'Kurang Baik', 'Tidak Baik']);
            $table->enum('kondisi', ['terawat','tidak terawat']);
            $table->enum('unit_pengelola', ['PS','UPPS','PT']);
            $table->string('tautan')->default('#');;
            $table->unsignedBigInteger('id_prodi')->default(1);
            $table->foreign('id_prodi')->references('id')->on('data_program_studis')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tabel_k5_prasarana_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_prasarana');
            $table->integer('jumlah_unit')->default(0);
            $table->integer('luas')->default(0);
            $table->enum('kepemilikan', ['SD', 'SW']);
            $table->enum('kondisi', ['terawat', 'tidak terawat']);
            $table->integer('penggunaan')->default(0);
            $table->string('tautan')->default('#');
            $table->unsignedBigInteger('id_prodi')->default(1);
            $table->foreign('id_prodi')->references('id')->on('data_program_studis')->onDelete('cascade');
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
        Schema::dropIfExists('tabel_c5_s');
        Schema::dropIfExists('tabel_k5_sarana_pendidikan');
        Schema::dropIfExists('tabel_k5_prasarana_pendidikan');
    }
};
