<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $table='latihan';

    protected $fillable = [
        'nm_latihan', 'sl_latihan', 'srcCode'
    ];
    
    
}
