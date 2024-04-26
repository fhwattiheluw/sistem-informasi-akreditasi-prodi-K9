<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TabelDosen extends Model
{
    use HasFactory;

    protected $table = 'tabel_dosen';
    protected $guarded = ['id'];

    public function beban_kerja_dtps() : HasOne
    {
        return $this->hasOne(TabelK4BebanKerjaDTPS::class, 'nidn_nidk');
    }
}
