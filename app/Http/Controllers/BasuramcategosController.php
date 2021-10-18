<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategosRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramcategos;
use PhpParser\Node\Stmt\Return_;

class BasuramcategosController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth')->only('create'); //!C 21 
       
    }

    public function index()
    {
      
        $categos = Basuramcategos::all();
        return view('vcategos.vcategosindex', compact('categos'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $categos = Basuramcategos::all();

   //     return view('vcategos', compact('categos'));
   // }

    public function create() //!C2 L17
    {
        return  view('vcategos.vcategoscreate');
    }

    public function store(CategosRequest $request) //!C2 L17
    {
        
        $catego = Basuramcategos::create($request->validated()); //! c49 asi quedo con formrequest
        
        return redirect()
            ->route('categos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new catego with id {$catego->catego} was created succesx");  // ! C2
    }

    public function edit(Basuramcategos $catego) //!C2 L17 L47
    {
        return view('vcategos.vcategosedit')->with([  //!C2 L33 

            'catego' => $catego,
        ]);
    }
    public function update($catego) //!C2 L17
    {
        $catego = Basuramcategos::findOrFail($catego); //!C3 L33 

        //return 'update desde controlador';
        $catego->update(request()->all()); //!C3 L33

        return redirect()
            ->route('categos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  catego with id {$catego->catego} was modificated succesx");
    }
    public function show(Basuramcategos $catego) //!C3 L17 L47
    {
        return view('vcategos.vcategosshow')->with([  //!C3 L33

            'catego' => $catego,
        ]);
    }
    public function destroy($catego) //!C3 L35
    {
        $catego = Basuramcategos::findOrFail($catego);

        $catego->delete();

        return $catego;
        
    }
    //
}
