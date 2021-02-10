<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{   
    // dati della tabella beers gestiti dall'utenete e non da laravel
    protected $fillable = [
        'nome',
        'tipo',
        'paese',
        'regione',
        'gradazione_alcolica',
        'descrizione'
    ];
}
