<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'ikon',
    ];
}
