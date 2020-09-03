<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'titolo',
        'genere',
        'durata',
        'anno',
        'voto',
        'descrizione',
    ];
}
