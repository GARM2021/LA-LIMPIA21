<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramgrupos extends Model
{
    use HasFactory;

    protected $table = 'basuramgrupos';// !C2
    protected $primaryKey = 'grupo';   // !C2
    protected $fillable = [
        'descripcion',
        'fundamento',
    ];
}
