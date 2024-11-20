<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Varzybos;
use Illuminate\Support\Facades\DB;
class VarzybosController extends Controller
{
    public function index()
    {
        $matches = Varzybos::all(); 
        return view('Varzybos', compact('matches')); 
    }
}