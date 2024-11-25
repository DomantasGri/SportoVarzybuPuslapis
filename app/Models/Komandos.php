<?php

namespace App\Models;

use App\Http\Controllers\Zaidejai;
use Illuminate\Database\Eloquent\Model;

class Komandos extends Model
{
    protected $table = 'komandos';

    protected $fillable = [
        'id',
        'komandos_pavadinmas',
        'Laimejimai',
        'treneris',
        'Pralaimejimai',
        'taskai',
        'Perdavimai',
        'Blokai',
        'Klaidos',
        'Geltonos_Kortos',
        'Raudonos_Kortos',
        'Efektyvumas',
    ];

}
