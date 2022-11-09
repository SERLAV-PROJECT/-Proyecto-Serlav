<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;

    protected $table = 'prenda';

    protected $fillable = [

        'nombrePrenda',
        'tipoTela',
        'color',
        'cantidad',
        'valor'
        
    ];

    

}
