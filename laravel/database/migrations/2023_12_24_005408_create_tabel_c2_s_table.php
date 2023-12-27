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
    //create : Tabel 2.2.2 Data Kerja Sama - Bidang Pendidikan
    Schema::create('tabel_k2_bidang_pendidikan', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    //create : Tabel 2.2.2 Data Kerja Sama - Bidang Penelitian
    Schema::create('tabel_k2_bidang_penelitian', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    //create : Tabel 2.2.2 Data Kerja Sama - Bidang Pengabdian kepada Masyarakat (PkM)
    Schema::create('tabel_k2_bidang_pkm', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    //create : Tabel 2.2.2 Data Kerja Sama - Bidang Pengembangan Kelembagaan: SDM, Sarana/Prasarana, Publikasi, HKI, Paten, Teknologi Pembelajaran, dll.
    Schema::create('tabel_k2_bidang_pengembangan_kelembagaan', function (Blueprint $table) {
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

    Schema::dropIfExists('tabel_c2_s');
    Schema::dropIfExists('tabel_k2_bidang_pendidikan');
    Schema::dropIfExists('tabel_k2_bidang_penelitian');
    Schema::dropIfExists('tabel_k2_bidang_pkm');
    Schema::dropIfExists('tabel_k2_bidang_pengembangan_kelembagaan');
  }
};
