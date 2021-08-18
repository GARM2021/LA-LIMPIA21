<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $colonias = DB::table('basuramcolonia')->get();
        return view('vcolonias', compact('colonias'));
    }
}
