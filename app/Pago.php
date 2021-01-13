<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    
    protected $fillable = [
        'id', 'titular', 'fechacad', 'cvc' ,'numTarjeta',
    ];

}
