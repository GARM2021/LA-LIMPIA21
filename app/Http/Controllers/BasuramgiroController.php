<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GiroRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Basuramgiro;
use PhpParser\Node\Stmt\Return_;

class BasuramgiroController extends Controller
{ //public function getAllColonia() //!C2 Usa query builder
    // {
    //      $giros = DB::table('basuramcolonia')->get();
    //     return view('vgiros', compact('giros'));
    // }
    public function index()
    {
        $giros = Basuramgiro::all();
        return view('vgiros.vgirosindex', compact('giros'));
    }

    //public function getAllColoniasUsingModel() //!C2s

    // {
    //    $giros = Basuramgiro::all();

    //     return view('vgiros', compact('giros'));
    // }

    public function create() //!C2 L17
    {
        return  view('vgiros.vgiroscreate');
    }

    public function store(GiroRequest $request) //!C2 L17
    {
        $giro = Basuramgiro::create($request->validated()); //! c49 asi quedo con formrequest

        return redirect()
            ->route('giros.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The new giro with id {$giro->giro} was created succesx");  // ! C2
    }

    public function edit(Basuramgiro $giro) //!C2 L17 L47
    {
        return view('vgiros.vgirosedit')->with([  //!C2 L33 

            'giro' => $giro,
        ]);
    }
    public function update($giro) //!C2 L17
    {
        $giro = Basuramgiro::findOrFail($giro); //!C3 L33 

        //return 'update desde controlador';
        $giro->update(request()->all()); //!C3 L33

        return redirect()
            ->route('giros.index') //! route Este es el recomendado es mas dificil que cambie el nombre de la route 
            ->withSuccess("The  giro with id {$giro->giro} was modificated succesx");
    }
    public function show(Basuramgiro $giro) //!C3 L17 L47
    {
        return view('vgiros.vgirosshow')->with([  //!C3 L33

            'giro' => $giro,
        ]);
    }
    public function destroy($giro) //!C3 L35
    {
        $giro = Basuramgiro::findOrFail($giro);
        $giro->delete();
        return $giro;
    }

    public function cuentasgirosshow(Basuramgiro $giro)
    {
        $tipocuentas = Basuramgiro::GiroCuentas_HM($giro->giro);
        return view('vgiros.vgirocuentashm', compact('tipocuentas'));
    }

    public function subgirosgirosshow(Basuramgiro $giro)
    {
        $girosubgiros = Basuramgiro::GiroSubgiros_HM($giro->giro);
        
        return view('vgiros.vgirossubgiroshm', compact('girosubgiros'));
    }
}
