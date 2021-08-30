<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GruposRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramgrupos;
use PhpParser\Node\Stmt\Return_;

class BasuramgruposController extends Controller
{
    public function index()
    {
        $grupos = Basuramgrupos::all();
        return view('vgrupos.vgruposindex', compact('grupos'));
    }

    //public function getAllColoniasUsingModel() //!C2s
    
   // {
    //    $grupos = Basuramgrupos::all();

   //     return view('vgrupos', compact('grupos'));
   // }

    public function create() //!C2 L17
    {
        return  view('vgrupos.vgruposcreate');
    }

    public function store(GruposRequest $request) //!C2 L17
    {
        $grupo = Basuramgrupos::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('grupos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new grupo with id {$grupo->grupo} was created succesx");  // ! C2
    }

    public function edit(Basuramgrupos $grupo) //!C2 L17 L47
    {
        return view('vgrupos.vgruposedit')->with([  //!C2 L33 

            'grupo' => $grupo,
        ]);
    }
    public function update($grupo) //!C2 L17
    {
        $grupo = Basuramgrupos::findOrFail($grupo); //!C3 L33 

        //return 'update desde controlador';
        $grupo->update(request()->all()); //!C3 L33

        return redirect()
            ->route('grupos.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  grupo with id {$grupo->grupo} was modificated succesx");
    }
    public function show(Basuramgrupos $grupo) //!C3 L17 L47
    {
        return view('vgrupos.vgruposshow')->with([  //!C3 L33

            'grupo' => $grupo,
        ]);
    }
    public function destroy($grupo) //!C3 L35
    {
        $grupo = Basuramgrupos::findOrFail($grupo);

        $grupo->delete();

        return $grupo;
        
    }
}
