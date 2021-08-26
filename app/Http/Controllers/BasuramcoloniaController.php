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
    public function coloniasIndex()
    {
        $colonias = Basuramcolonia::all();
        return view('vcolonias.vcoloniasindex', compact('colonias'));
    }

    public function getAllColoniasUsingModel() //!C2s

    {
        $colonias = Basuramcolonia::all();
        // return $colonias;
        return view('vcolonias', compact('colonias'));
    }

    public function create() //!C2 L17
    {
        return  view('vcolonias.vcoloniascreate');
    }

    public function store(ColoniaRequest $request) //!C2 L17
    {
       $colonia = Basuramcolonia::create($request->validated());//! c49 asi quedo con formrequest
       
       return redirect()
       ->route('colonias.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
       ->withSuccess("The new colonia with id {$colonia->colonia} was created succesx");  // ! C2
   

     
    }
    
    public function edit(ColoniaRequest $request, Basuramcolonia $colonia) //!C2 L17
    {
       
       // return 'show desde edit';
     

       return view('vcolonias.vcoloniasedit')->with([  //!C2 L33
         
           'colonia' => $colonia,
        ]);
    }
    public function update(Basuramcolonia $colonia) //!C2 L17
    {
        return 'update desde controlador';
     //$colonia->update($request->validate());
    }
    public function show() //!C2 L17
    {
        return  'show desde controlador'  ;
    }
    public function destroy() //!C2 L17
    {
        return 'destroy desde controlador';
    }
}
