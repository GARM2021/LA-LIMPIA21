<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TpocarRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramtpocar;
use PhpParser\Node\Stmt\Return_;

class BasuramtpocarController extends Controller
{
    public function index()
    {
        $tpocars = Basuramtpocar::all();
        return view('vtpocars.vtpocarsindex', compact('tpocars'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $tpocars = Basuramtpocar::all();

   //     return view('vtpocars', compact('tpocars'));
   // }

    public function create() //!C2 L17
    {
        return  view('vtpocars.vtpocarscreate');
    }

    public function store(TpocarRequest $request) //!C2 L17
    {
        $tpocar = Basuramtpocar::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('tpocars.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new tpocar with id {$tpocar->tpocar} was created succesx");  // ! C2
    }

    public function edit(Basuramtpocar $tpocar) //!C2 L17 L47
    {
        return view('vtpocars.vtpocarsedit')->with([  //!C2 L33 

            'tpocar' => $tpocar,
        ]);
    }
    public function update($tpocar) //!C2 L17
    {
        $tpocar = Basuramtpocar::findOrFail($tpocar); //!C3 L33 

        //return 'update desde controlador';
        $tpocar->update(request()->all()); //!C3 L33

        return redirect()
            ->route('tpocars.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  tpocar with id {$tpocar->tpocar} was modificated succesx");
    }
    public function show(Basuramtpocar $tpocar) //!C3 L17 L47
    {
        return view('vtpocars.vtpocarsshow')->with([  //!C3 L33

            'tpocar' => $tpocar,
        ]);
    }
    public function destroy($tpocar) //!C3 L35
    {
        $tpocar = Basuramtpocar::findOrFail($tpocar);

        $tpocar->delete();

        return $tpocar;
        
    }
    //
}
