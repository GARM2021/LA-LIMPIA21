<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramgiro extends Model
{
    use HasFactory;
    protected $table = 'basuramgiro';// !C2
    protected $primaryKey = 'giro';   // !C2
    protected $fillable = [
        'nomgiro',
        'causarec',
    ];

}
