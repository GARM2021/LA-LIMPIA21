<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubgiroRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramsubgiro;
use PhpParser\Node\Stmt\Return_;

class BasuramsubgiroController extends Controller
{
    public function index()
    {
        $subgiros = Basuramsubgiro::all();
        return view('vsubgiros.vsubgirosindex', compact('subgiros'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $subgiros = Basuramsubgiro::all();

   //     return view('vsubgiros', compact('subgiros'));
   // }

    public function create() //!C2 L17
    {
        return  view('vsubgiros.vsubgiroscreate');
    }

    public function store(SubgiroRequest $request) //!C2 L17
    {
        $subgiro = Basuramsubgiro::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('subgiros.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new subgiro with id {$subgiro->subgiro} was created succesx");  // ! C2
    }

    public function edit(Basuramsubgiro $subgiro) //!C2 L17 L47
    {
        return view('vsubgiros.vsubgirosedit')->with([  //!C2 L33 

            'subgiro' => $subgiro,
        ]);
    }
    public function update($subgiro) //!C2 L17
    {
        $subgiro = Basuramsubgiro::findOrFail($subgiro); //!C3 L33 

        //return 'update desde controlador';
        $subgiro->update(request()->all()); //!C3 L33

        return redirect()
            ->route('subgiros.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  subgiro with id {$subgiro->subgiro} was modificated succesx");
    }
    public function show(Basuramsubgiro $subgiro) //!C3 L17 L47
    {
        return view('vsubgiros.vsubgirosshow')->with([  //!C3 L33

            'subgiro' => $subgiro,
        ]);
    }
    public function destroy($subgiro) //!C3 L35
    {
        $subgiro = Basuramsubgiro::findOrFail($subgiro);

        $subgiro->delete();

        return $subgiro;
        
    }

   
    //
    //
}
