<?php

namespace App\Http\Controllers;

use App\Models\Varzybos;
use App\Models\Komandos;
use Illuminate\Http\Request;

class AdminVarzybos extends Controller
{
    function rodyti(){
        $varzybos = Varzybos::with(['komanda1', 'komanda2'])->get();
        $komandos = Komandos::all();
        return view('AdminVarzybos', compact('varzybos', 'komandos'));
    }

    function create(){
        $komandos = Komandos::all();
        return view('AdminVarzybosKurti', compact('komandos'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'Komanda_1' => 'required',
            'Komanda_2' => 'required',
            'Varzybu_data' => 'required',
            'Varzybu_laikas' => 'required',
        ]);
    
        $naujosVarzybos = Varzybos::create($data);
    
        return redirect(route('AdminVarzybos'));
    }
    function edit(Komandos $komandos, Varzybos $varzybos){

        $komandos = Komandos::all();

        return view('AdminVarzybosRedagavimas', compact('komandos', 'varzybos'));  
    }

    public function update(Varzybos $varzybos, Request $request){
        $data = $request->validate([
            'Komanda_1' => 'required',
            'Komanda_2' => 'required',
            'Varzybu_data' => 'required',
            'Varzybu_laikas' => 'required',
        ]);

        $varzybos->update($data);

        return redirect(route('AdminVarzybos'));
    }

    public function delete(Varzybos $varzybos){
        $varzybos -> delete();

        return redirect(route('AdminVarzybos'));
    }

}
