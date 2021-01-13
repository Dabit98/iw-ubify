<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'rutas';

     protected $fillable = [
        'id', 'origen', 'destino', 'precio', 'estado',
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }


    public function vehiculos(){
        return $this->belongsToMany('App\Vehiculo');
    }

}
