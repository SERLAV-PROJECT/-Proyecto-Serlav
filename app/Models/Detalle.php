<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    protected $table = 'detalle';

    protected $fillable = [
        'descripcion',
        'factura_id',
        'prenda_id'
       
        
    ];

    public function prenda()
    {
        return $this->belongsTo('App\Models\Prenda', 'prenda_id');
    } 

    public function factura()
    {
        return $this->belongsTo('App\Models\Factura', 'factura_id');
    } 



}
