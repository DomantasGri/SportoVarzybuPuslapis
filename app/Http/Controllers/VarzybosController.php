<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varzybos;
use App\Models\Komandos;

class VarzybosController extends Controller
{
    public function index()
    {
        $matches = Varzybos::with(['komanda1', 'komanda2'])->get();
        
        $matchesGroupedByDate = $matches->groupBy(function ($item) {
            return $item->Varzybu_data;
        });
    
        return view('Varzybos', [
            'matchesGroupedByDate' => $matchesGroupedByDate,
        ]);
    }
}