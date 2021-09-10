<?php

namespace App\Http\Controllers; //!C1

use App\Http\Requests\ColoniaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramcolonia;
use PhpParser\Node\Stmt\Return_;

class BasuramcoloniaController extends Controller
{
    //public function getAllColonia() //!C2 Usa query builder
    // {
    //      $colonias = DB::table('basuramcolonia')->get();
    //     return view('vcolonias', compact('colonias'));
    // }

   //public function showcolonias(Basuramcolonia $colonia) //!C3 L17 L47
   //{
   //   $value =      Basuramcolonia::prueba(1);
   //  dd($value);
   //    return view('vcolonias.vcoloniasshow')->with([  //!C3 L33

   //        'colonia' => $colonia,
   //    ]);
   //}
    public function index()
    {
        $colonias = Basuramcolonia::all();
        return view('vcolonias.vcoloniasindex', compact('colonias'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $colonias = Basuramcolonia::all();

   //     return view('vcolonias', compact('colonias'));
   // }

    public function create() //!C2 L17
    {
        return  view('vcolonias.vcoloniascreate');
    }

    public function store(ColoniaRequest $request) //!C2 L17
    {
        $colonia = Basuramcolonia::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('colonias.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new colonia with id {$colonia->colonia} was created succesx");  // ! C2
    }

    public function edit(Basuramcolonia $colonia) //!C2 L17 L47
    {
        return view('vcolonias.vcoloniasedit')->with([  //!C2 L33 

            'colonia' => $colonia,
        ]);
    }
    public function update($colonia) //!C2 L17
    {
        $colonia = Basuramcolonia::findOrFail($colonia); //!C3 L33 

        //return 'update desde controlador';
        $colonia->update(request()->all()); //!C3 L33

        return redirect()
            ->route('colonias.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  colonia with id {$colonia->colonia} was modificated succesx");
    }
    public function show(Basuramcolonia $colonia) //!C3 L17 L47
    {
      
        return view('vcolonias.vcoloniasshow')->with([  //!C3 L33

            'colonia' => $colonia,
        ]);
    }
    public function destroy($colonia) //!C3 L35
    {
        $colonia = Basuramcolonia::findOrFail($colonia);

        $colonia->delete();

        return $colonia;
        
    }

    public function cuentascoloniasshow(Basuramcolonia $colonia) //!C3 L17 L47
    {
      //     $coloniacuentas = Basuramcolonia::ColoniaCuentas_HM($colonia->colonia);
      // return view('vdrecbas.vdrecbascoloniacuentashm', compact('coloniacuentas'));
//
       $tipocuentas = Basuramcolonia::ColoniaCuentas_HM($colonia->colonia);
       return view('vdrecbas.vdrecbascoloniacuentashm', compact('tipocuentas'));
       
    }

    
}
