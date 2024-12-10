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

    function showKomanda($id){
        $komanda = DB::table('komandos')->where('id', $id)->first();
        $zaidejai = DB::table('zaidejas')
        ->where('Komanda_id', $id)
        ->select(DB::raw('CONCAT(vardas, " ", pavarde) as pilnas_vardas'))
        ->get();

        return view('komandosVidus', ['komanda'=>$komanda, 'zaidejai'=>$zaidejai]);
    }

}
