<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Varzybos extends Model
{
    protected $table = 'varzybos';

    protected $fillable = [
        'id',
        'Komanda_1',
        'Komanda_2',
        'Varzybu_data',
        'Varzybu_laikas',
    ];
    
}
