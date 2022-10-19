<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'Factura';

    protected $fillable = [
        'user_id',
        'nombreCliente',
        'fecha',
        'valorTotal',
        'estado',
    ];
}
