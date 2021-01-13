<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $keyType = 'string';

    protected $primaryKey = 'email';
    protected $fillable = [
        'email', 'nombre', 'apellidos', 'fecha_nac', 'contrasenya',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function rutas(){
        return $this->belongsToMany('App\Ruta');
    }


    public function pago(){
        return $this->belongsTo('App\Pago');
    }
}
