<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PraciceOneController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

     public function index()
    {
        $paso = "paso";
        dd($paso);
       $users = DB::table('basuramcolonia')-> get();
       dd($users);
       return view('/practice_one_view', ['basuramcolonia' => $users]);
    }
}
