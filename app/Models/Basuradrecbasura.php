<?php

namespace App\Models;

use App\Models\Basuramcolonia;
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
        'tipo',

    ];



    public  function BT_ColoniaCuentas()
    {
        return $this->belongsTo('App\Models\Basuramcolonia', 'colonia', 'colonia');
    }

    public  function BT_GestorCuentas()
    {
        return $this->belongsTo('App\Models\Basuramgestor', 'gestor', 'gestor');
    }

    public function BT_GiroCuentas()
    {
        return $this->belongsTo('App\Models\Basuramgiro', 'giro', 'giro');
    }
}
