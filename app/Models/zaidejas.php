<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class zaidejas extends Model
{
    protected $table = 'zaidejas';

    protected $fillable = [
        'id',
        'vardas',
        'pavarde',
        'komanda',
        'taskai',
        'perdavimai',
        'blokai',
        'klaidos',
        'geltonos kortos',
        'raudonos koronos',
        'efektyvumas',
    ];
}