<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Varzybos extends Model
{
    protected $table = 'varzybos';

    protected $fillable = [
        'id',
        'varzybos_date',
        'team1',
        'team2',
        'time',
    ];
    
}
