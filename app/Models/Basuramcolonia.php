<?php

namespace App\Models; //!C1

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramcolonia extends Model
{
    use HasFactory;
    
    protected $table = 'basuramcolonia';// !C2
    protected $primaryKey = 'colonia';   // !C2
    protected $fillable = [
        'nomcol',
    ];


}
