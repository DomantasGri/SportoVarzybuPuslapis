<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komandos;

class AdminKomandos extends Controller
{
    public function rodyti(){
        $komandos = Komandos::all();
        return view('AdminKomandos',  compact('komandos'));
    }
    
    public function create(){
        return view('AdminKomandaKurti');
    }

    public function storeKomanda(Request $request){
        $data = $request->validate([
            'komandos_pavadinmas' => 'required',
            'Laimejimai' => 'required',
            'treneris' => 'required',
            'Pralaimejimai' => 'required',
            'taskai' => 'required',
            'Perdavimai' => 'required',
            'Blokai' => 'required',
            'Klaidos' => 'required',
            'Ace'=>  'required',
            'GKortos' => 'required',
            'RKortos' => 'required',
            'Efektyvumas' => 'required'
        ]);

        $naujaKomanda = Komandos::create($data);

        return redirect(route('AdminKomandos'));
    }

    public function edit(Komandos $komandos){
        return view('AdminKomandaRedaguoti',['komandos' => $komandos]);
    }

    public function update(Komandos $komandos, Request $request){
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
        $komandos->update($data);

        return redirect(route('AdminKomandos'));
    }

    public function delete(Komandos $komandos){
        $komandos->delete();
        return redirect(route('AdminKomandos'));
    }

}
