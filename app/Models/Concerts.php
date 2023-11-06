<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concerts extends Model
{
    use HasFactory;
    protected $casts = [
        'date' => 'date:DD/MM/YYYY',
        //'time' => 'time:HH/MM',
    ];
}
