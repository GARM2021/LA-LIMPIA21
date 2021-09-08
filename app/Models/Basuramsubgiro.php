<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basuramsubgiro extends Model
{
    use HasFactory;

    protected $table = 'basuramsubgiro';// !C2
    protected $primaryKey = 'subgiro';   // !C2
    protected $fillable = [
        'nomsubgiro',
        'giro',
    ];

    public function BT_GiroSubgiros()
    {
        return $this->belongsTo('App\Models\Basuramgiro', 'giro', 'giro');
    }

    public function HM_SubgiroCuentas()
    {
        return $this->hasMany('App\Models\Basuradrecbasura', 'subgiro', 'subgiro');
        
    }

    public static function SubgiroCuentas_HM($subgiro)
    {
        $subgirocuentas = Basuramsubgiro::find($subgiro)->HM_SubgiroCuentas;
        return $subgirocuentas; # code...
    }
}
