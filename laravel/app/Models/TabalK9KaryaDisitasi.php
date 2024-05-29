<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabalK9KaryaDisitasi extends Model
{
    use HasFactory;

    protected $table = 'tabel_k9_karya_disitasis';
    protected $guarded = ['id'];
    protected $fillable = [];
}
