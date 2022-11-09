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
        'prenda_id'
        
    ];

    public function prenda()
    {
        return $this->belongsTo('App\Models\Prenda','id', 'prenda_id');
    } 

}
