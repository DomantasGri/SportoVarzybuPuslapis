<?php

namespace App\Http\Controllers;

use App\Models\Komandos;
use App\Models\zaidejas;
use Illuminate\Http\Request;

class AdminZaidejai extends Controller
{
    function rodyti(){
        $komandos = Komandos::all();
        $Zaidejas = zaidejas::all();
        return view('AdminZaidejai', compact('Zaidejas','komandos'));
    }

    function create(){
        $teams = Komandos::all();
        return view('AdminZaidejaiKurti', compact('teams'));
    }

    function store(Request $request){
        
        try {
            $data = $request->validate([
                'vardas' => 'required',
                'pavarde' => 'required',
                'Komanda_id' => 'required',
                'taskai' => 'required',
                'perdavimai' => 'required',
                'blokai' => 'required',
                'klaidos' => 'required',
                'ACE' => 'required',
                'GKortos' => 'required',
                'RKortos' => 'required',
                'efektyvumas' => 'required',
            ]);
            
            $Zaidejas = Zaidejas::create($data);
            return redirect(route('AdminZaidejai'));
        } catch (\Exception $e) {
            dd($e->getMessage());  // This will show you the exact error
        }
    }

    public function edit(Komandos $komandos ,zaidejas $zaidejas){

        $komandos = Komandos::all();

        return view('AdminZaidejaiRedaguoti' , compact('komandos', 'zaidejas'));
    }


    public function update(zaidejas $zaidejas, Request $request){
        $data = $request->validate([
            'vardas' => 'required',
            'pavarde' => 'required',
            'Komanda_id' => 'required',
            'taskai' => 'required',
            'perdavimai' => 'required',
            'blokai' => 'required',
            'klaidos' => 'required',
            'ACE' => 'required',
            'GKortos' => 'required',
            'RKortos' => 'required',
            'efektyvumas' => 'required',
        ]);
        $zaidejas->update($data);
        return redirect(route('AdminZaidejai'));
    
    }

    public function delete(zaidejas $zaidejas){
        $zaidejas->delete();
        return redirect(route('AdminZaidejai'));
    }

}
