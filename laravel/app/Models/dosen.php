<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = 'tabel_dosen';
    protected $guarded = ['id'];
    protected $fillable = [];

}
