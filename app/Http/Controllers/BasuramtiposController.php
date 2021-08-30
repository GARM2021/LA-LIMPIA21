<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TiposRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramtipos;
use PhpParser\Node\Stmt\Return_;

class BasuramtiposController extends Controller
{
    public function index()
    {
        $tipos = Basuramtipos::all();
        return view('vtipos.vtiposindex', compact('tipos'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $tipos = Basuramtipos::all();

   //     return view('vtipos', compact('tipos'));
   // }

    public function create() //!C2 L17
    {
        return  view('vtipos.vtiposcreate');
    }

    public function store(TiposRequest $request) //!C2 L17
    {
        $tipo = Basuramtipos::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('tipos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new tipo with id {$tipo->tipo} was created succesx");  // ! C2
    }

    public function edit(Basuramtipos $tipo) //!C2 L17 L47
    {
        return view('vtipos.vtiposedit')->with([  //!C2 L33 

            'tipo' => $tipo,
        ]);
    }
    public function update($tipo) //!C2 L17
    {
        $tipo = Basuramtipos::findOrFail($tipo); //!C3 L33 

        //return 'update desde controlador';
        $tipo->update(request()->all()); //!C3 L33

        return redirect()
            ->route('tipos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  tipo with id {$tipo->tipo} was modificated succesx");
    }
    public function show(Basuramtipos $tipo) //!C3 L17 L47
    {
        return view('vtipos.vtiposshow')->with([  //!C3 L33

            'tipo' => $tipo,
        ]);
    }
    public function destroy($tipo) //!C3 L35
    {
        $tipo = Basuramtipos::findOrFail($tipo);

        $tipo->delete();

        return $tipo;
        
    }
    //
}
