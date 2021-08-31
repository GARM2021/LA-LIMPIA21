<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramtpocar extends Model
{
    use HasFactory;

    protected $table = 'basuramtpocar';// !C2
    protected $primaryKey = 'tpocar';   // !C2
    protected $fillable = [
        'tpocar',
        'descripcion',

    ];
}
