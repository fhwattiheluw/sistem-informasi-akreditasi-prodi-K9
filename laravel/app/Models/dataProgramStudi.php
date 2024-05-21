<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'data_program_studis';
    protected $fillable = [
        'id',
        'nama',
        'jenis',
        'status_peringkat',
        'nomor_sk',
        'tanggal_sk',
        'tanggal_kadaluarsa',
        'jumlah_mhs_ts',
        'jumlah_dtps_ts',
        'rerata_ipk',
        'rerata_masa_studi',
    ];

}
