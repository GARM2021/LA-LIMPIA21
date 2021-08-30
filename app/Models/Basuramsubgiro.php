<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramsubgiro extends Model
{
    use HasFactory;

    protected $table = 'basuramsubgiro';// !C2
    protected $primaryKey = 'subgiro';   // !C2
    protected $fillable = [
        'nomsubgiro',
        'giro',
    ];
}
