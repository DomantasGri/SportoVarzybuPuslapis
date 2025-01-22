<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Varzybos extends Model
{
    protected $table = 'varzybos';

    protected $fillable = [
        'Komanda_1',
        'Komanda_2',
        'Varzybu_data',
        'Varzybu_laikas',
    ];
    
    public function komanda1()
    {
        return $this->belongsTo(Komandos::class, 'Komanda_1');
    }

    public function komanda2()
    {
        return $this->belongsTo(Komandos::class, 'Komanda_2');
    }

}
