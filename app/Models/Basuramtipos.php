<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramtipos extends Model
{
    use HasFactory;

    protected $table = 'basuramtipos';// !C2
    protected $primaryKey = 'tipo';   // !C2
    protected $fillable = [
        'descripcion',
        'fecven',
        'doctot',
    ];
}
