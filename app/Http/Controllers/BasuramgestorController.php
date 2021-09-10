<?php

namespace App\Http\Controllers;

use App\Http\Requests\GestorRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Basuramgestor;
use PhpParser\Node\Stmt\Return_;

class BasuramgestorController extends Controller
{
    //public function getAllColonia() //!C2 Usa query builder
    // {
    //      $gestores = DB::table('basuramgestor')->get();
    //     return view('vgestores', compact('gestores'));
    // }
    public function index()
    {
        $gestores = Basuramgestor::all();
        return view('vgestores.vgestoresindex', compact('gestores'));
    }

    //public function getAllgestorsUsingModel() //!C2s

    // {
    //    $gestores = Basuramgestor::all();

    //     return view('vgestores', compact('gestores'));
    // }

    public function create() //!C2 L17
    {
        return  view('vgestores.vgestorescreate');
    }

    public function store(GestorRequest $request) //!C2 L17
    {
        $gestor = Basuramgestor::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('gestores.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new gestor with id {$gestor->gestor} was created succesx");  // ! C2
    }

    public function edit(Basuramgestor $gestor) //!C2 L17 L47
    {
        return view('vgestores.vgestoresedit')->with([  //!C2 L33 

            'gestor' => $gestor,
        ]);
    }
    public function update($gestor) //!C2 L17
    {
        $gestor = Basuramgestor::findOrFail($gestor); //!C3 L33 

        //return 'update desde controlador';
        $gestor->update(request()->all()); //!C3 L33

        return redirect()
            ->route('gestores.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  gestor with id {$gestor->gestor} was modificated succesx");
    }
    public function show(Basuramgestor $gestor) //!C3 L17 L47
    {
        return view('vgestores.vgestoresshow')->with([  //!C3 L33

            'gestor' => $gestor,
        ]);
    }
    public function destroy($gestor) //!C3 L35
    {
        $gestor = Basuramgestor::findOrFail($gestor);

        $gestor->delete();

        return $gestor;
    } 

    public function cuentasgestoresshow(Basuramgestor $gestor) //!C3 L17 L47
    {
                  
       $tipocuentas = Basuramgestor::GestorCuentas_HM($gestor->gestor);
       //dd($gestorcuentas);
       return view('vgestores.vgestorcuentashm', compact('tipocuentas'));
       
    }

}
