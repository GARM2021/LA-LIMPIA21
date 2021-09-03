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

    public  function HM_ColoniaCuentas()
    {
            {
      // return $this->belongsTo('App\Models\Basuradrecbasura', 'colonia', 'colonia'); 
       return $this->hasMany('App\Models\Basuradrecbasura', 'colonia', 'colonia'); 
         }
        # code...
    }

    public static function ColoniaCuentas_HM($colonia)
    {
        
        $cuentascolonia = Basuramcolonia::find($colonia)->HM_ColoniaCuentas;
         return $cuentascolonia;

        # code...
    }

}
