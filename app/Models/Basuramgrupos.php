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

    public function HM_GrupoCuentas()
    {
        return $this->hasMany('App\Models\Basuradrecbasura', 'grupo', 'grupo');# code...
    }

    public static function GrupoCuentas_HM($grupo)
    {
        $grupocuentas = Basuramgrupos::find($grupo)->HM_GrupoCuentas;
        return $grupocuentas;
        # code...
    }
}
