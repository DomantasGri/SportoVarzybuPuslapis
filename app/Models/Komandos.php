<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komandos extends Model
{
    protected $table = 'komandos';

    protected $fillable = [
        'id',
        'komanda',
        'Laimejimai',
        'Pralaimejimai',
        'taskai',
        'Perdavimai',
        'Blokai',
        'Klaidos',
        'Efektyvumas',
    ];
}
