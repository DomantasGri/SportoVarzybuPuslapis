<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class zaidejas extends Model
{

    public $timestamps = false;

    protected $table = 'zaidejas';

    protected $fillable = [
        'vardas',
        'pavarde',
        'Komanda_id',
        'taskai' ,
        'perdavimai' ,
        'blokai' ,
        'klaidos',
        'ACE',
        'GKortos',
        'RKortos',
        'efektyvumas',
    ];

    public function komanda()
    {
        return $this->belongsTo(Komandos::class, 'Komanda_id');
    }

}
