<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Basuramtipos extends Model
{
    use HasFactory;

    protected $table = 'basuramtipos';// !C2
    protected $primaryKey = 'tipo';   // !C2
    protected $fillable = [
        'descripcion',
        'fecven',
        'doctot',
    ];

    public function HM_TipoCuentas()
    {
        return $this->hasMany('App\Models\Basuradrecbasura', 'tipo', 'tipo');# code...
    }

    public static function TipoCuentas_HM($tipo)
    {
      
        $tipocuentas = Basuramtipos::find($tipo)->HM_TipoCuentas; //! aqui tenia Basuradrecbasura ERROR batalle una hora
     
        return $tipocuentas;
    }
}
