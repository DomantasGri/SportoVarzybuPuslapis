<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Zaidejai extends Controller
{
    public function showTaskai(){
        $topTaskai = DB::table('zaidejas')
            ->orderBy('taskai', 'desc')
            ->limit(10)
            ->get();  

        $topEfektyvumas = DB::table('zaidejas')
        ->orderBy('efektyvumas', 'desc')
        ->limit(10)
        ->get();

        return view('Zaidejai', ['topTaskai' => $topTaskai, 'topEfektyvumas' => $topEfektyvumas]);
    }

}
