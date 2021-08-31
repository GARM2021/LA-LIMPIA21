<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecargosRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramrecargos;
use PhpParser\Node\Stmt\Return_;

class BasuramrecargosController extends Controller
{
    public function index()
    {
        $recargos = Basuramrecargos::all();
        return view('vrecargos.vrecargosindex', compact('recargos'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $recargos = Basuramrecargos::all();

   //     return view('vrecargos', compact('recargos'));
   // }

    public function create() //!C2 L17
    {
        return  view('vrecargos.vrecargoscreate');
    }

    public function store(RecargosRequest $request) //!C2 L17
    {
        $recargo = Basuramrecargos::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('recargos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new recargo with id {$recargo->ayo} was created succesx");  // ! C2
    }

    public function edit(Basuramrecargos $recargo) //!C2 L17 L47
    {
        return view('vrecargos.vrecargosedit')->with([  //!C2 L33 

            'recargo' => $recargo,
        ]);
    }
    public function update($recargo) //!C2 L17
    {
        $recargo = Basuramrecargos::findOrFail($recargo); //!C3 L33 

        //return 'update desde controlador';
        $recargo->update(request()->all()); //!C3 L33

        return redirect()
            ->route('recargos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  recargo with id {$recargo->ayo} was modificated succesx");
    }
    public function show(Basuramrecargos $recargo) //!C3 L17 L47
    {
        return view('vrecargos.vrecargosshow')->with([  //!C3 L33

            'recargo' => $recargo,
        ]);
    }
    public function destroy($recargo) //!C3 L35
    {
        $recargo = Basuramrecargos::findOrFail($recargo);

        $recargo->delete();

        return $recargo;
        
    }
    //
    //
}
