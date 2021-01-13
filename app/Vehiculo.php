<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo', 'marca', 'modelo', 'plazas', 'minusvalido', 'conductor_email',
    ];

    public function conductores(){
        return $this->hasMany('App\Conductor');
    }


    public function rutas(){
        return $this->belongsToMany('App\Ruta');
    }
}
