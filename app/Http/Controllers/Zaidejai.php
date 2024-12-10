<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Zaidejai extends Controller
{
    public function showTaskai(){
        $topTaskai = DB::table('zaidejas')
            ->select(DB::raw('CONCAT(vardas, " ", pavarde) AS pilnas_vardas'), 'taskai', 'id')
            ->orderBy('taskai', 'desc')
            ->limit(10)
            ->get();  

        $topEfektyvumas = DB::table('zaidejas')
        ->select(DB::raw('CONCAT(vardas, " ", pavarde) AS pilnas_vardas'), 'efektyvumas', 'id')
        ->orderBy('efektyvumas', 'desc')
        ->limit(10)
        ->get();

        $TopACE = DB::table('zaidejas')
        ->select(DB::raw('CONCAT(vardas, " ", pavarde) AS pilnas_vardas'), 'ACE', 'id')
        ->orderBy('ACE', 'desc')
        ->limit(10)
        ->get();

        return view('Zaidejai', ['topTaskai' => $topTaskai, 'topEfektyvumas' => $topEfektyvumas,'TopACE' => $TopACE]);
    }

}
