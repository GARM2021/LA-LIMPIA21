<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramcategos extends Model
{
    use HasFactory;
    protected $table = 'basuramcategos';// !C2
    protected $primaryKey = 'tid';   // !C2
    protected $fillable = [
        'descripcion',
        'tarifa',
        'kilos',
    ];

}
