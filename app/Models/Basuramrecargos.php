<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramrecargos extends Model
{
    use HasFactory;

    protected $table = 'basuramrecargos';// !C2
    protected $primaryKey = 'ayo';   // !C2
    protected $fillable = [
        'pctajerec',
        'pctajerec2',
                   //
        ];
}
