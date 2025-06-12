<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description_below_title',
        'short_note',
        'date',
        'day_of_week',
        'time',
        'location',
    ];
    protected $casts = [
        'date' => 'date',
        'time' => 'datetime',
    ];
}

