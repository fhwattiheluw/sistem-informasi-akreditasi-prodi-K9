<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelMatakuliah extends Model
{
    use HasFactory;

    protected $table = 'tabel_matakuliah';
    protected $guarded = ['id'];
}