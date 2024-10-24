<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{

    protected $fillable = [
        'nome',
        'sigla',
        'escudo'
    ];

}
