<?php

namespace App\Http\Controllers; //!C1

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasuramcoloniaController extends Controller 
{
    public function getAllColonia()
    {
        $colonias = DB::table('basuramcolonia')->get();
        return view('vcolonias', compact('colonias'));
    }
    
}
