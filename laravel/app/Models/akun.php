<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;

    protected $table = 'akun';

    protected $fillable = ['name', 'level', 'password','role'];

}
