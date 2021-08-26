<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramgestor extends Model
{
    use HasFactory;

    protected $table = 'basuramgestor';// !C2
    protected $primaryKey = 'gestor';   // !C2
    protected $fillable = [
        'descripcion',
    ];

}
