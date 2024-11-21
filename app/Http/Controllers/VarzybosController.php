<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varzybos;
use Illuminate\Support\Facades\DB;
class VarzybosController extends Controller
{
    public function index()
    {

        $matches = DB::table('varzybos')->get();

        $matchesGroupedByDate = $matches->groupBy(function ($item) {
            return $item->varzybos_date;
        });
    
        return view('Varzybos', [
            'matchesGroupedByDate' => $matchesGroupedByDate,
        ]);

    }
}