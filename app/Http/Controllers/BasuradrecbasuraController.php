<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BasuradrecbasuraRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuradrecbasura;
use PhpParser\Node\Stmt\Return_;

class BasuradrecbasuraController extends Controller
{
    public function index()
    {
        $cuentas = Basuradrecbasura::all();
        return view('vdrecbas.vdrecbasindex', compact('cuentas'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $cuentas = Basuradrecbasura::all();

   //     return view('vdrecbas', compact('cuentas'));
   // }

    public function create() //!C2 L17
    {
        return  view('vdrecbas.vdrecbascreate');
    }

    public function store(BasuradrecbasuraRequest $request) //!C2 L17
    {
        $cuenta = Basuradrecbasura::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('cuentas.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new cuenta with id {$cuenta->cuenta} was created succesx");  // ! C2
    }

    public function edit(Basuradrecbasura $cuenta) //!C2 L17 L47
    {
        return view('vdrecbas.vdrecbasedit')->with([  //!C2 L33 

            'cuenta' => $cuenta,
        ]);
    }
    public function update($cuenta) //!C2 L17
    {
        $cuenta = Basuradrecbasura::findOrFail($cuenta); //!C3 L33 

        //return 'update desde controlador';
        $cuenta->update(request()->all()); //!C3 L33

        return redirect()
            ->route('cuentas.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  cuenta with id {$cuenta->cuenta} was modificated succesx");
    }
    public function show(Basuradrecbasura $cuenta) //!C3 L17 L47
    {
        return view('vdrecbas.vdrecbasshow')->with([  //!C3 L33

            'cuenta' => $cuenta,
        ]);
    }
    public function destroy($cuenta) //!C3 L35
    {
        $cuenta = Basuradrecbasura::findOrFail($cuenta);

        $cuenta->delete();

        return $cuenta;
        
    }
    //
}
