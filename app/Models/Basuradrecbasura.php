<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuradrecbasura extends Model
{
    use HasFactory;

    protected $table = 'basuradrecbasura'; // !C2
    protected $primaryKey = 'tid';   // !C2
    protected $fillable = [

        'cuenta',
        'giro',
        'subgiro',
        'nombre',
        'direccion',
        'nomciudad',
        'nomcomer',
        'ubicacion',
        'colonia',
        'finicio',
        'numper',
        'fperm',
        'fbaja',
        'fnotifica',
        'gestor',
        'expcat',
        'ctaant',
        'freq',
        'cvereq',
        'fembargo',
        'rfc',
        'telpart',
        'telneg',
        'grupo',
        'cuenta',

    ];
}
