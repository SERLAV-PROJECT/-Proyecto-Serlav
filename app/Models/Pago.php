<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pago';

    protected $fillable = [

        'valor',
        'factura_id',
        'estado'
        
    ];

    public function factura()
    {
        return $this->belongsTo('App\Models\Factura', 'factura_id'); 
    }
}
