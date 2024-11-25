<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Komandos extends Controller
{
    function show(){
        
        $komanda = DB::table('komandos')->get();

        return view('Komandos',['komanda'=>$komanda]);
    }
}
