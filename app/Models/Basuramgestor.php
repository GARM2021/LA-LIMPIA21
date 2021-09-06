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

    public  function HM_GestorCuentas()
    {
            {
      // return $this->belongsTo('App\Models\Basuradrecbasura', 'colonia', 'colonia'); 
       return $this->hasMany('App\Models\Basuradrecbasura', 'gestor', 'gestor'); 
         }
        # code...
    }

    public static function GestorCuentas_HM($gestor)
    {
        
        $cuentasgestor = Basuramgestor::find($gestor)->HM_GestorCuentas;
         return $cuentasgestor;

        # code...
    }

}
