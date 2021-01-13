<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Carbon\Carbon;

use App\Cliente;
use App\Vehiculo;
use App\Conductor;
use App\Pago;
use App\Ruta;

class Asociaciones1 extends TestCase
{

    private $conductor;
    private $vehiculo;
    private $cliente;
    private $ruta;
    private $pago;

    public function setUp():void{

        parent::setUp();

        $this->cliente = new Cliente();
        $this->cliente->email = 'cliente@gmail.es';
        $this->cliente->contrasenya = 'abcde';
        $this->cliente->nombre = 'nombrecliente';
        $this->cliente->apellidos = 'apellidocliente';
        $this->cliente->fecha_nac = Carbon::Parse('1992-03-04');
        $this->cliente->save();

         
        $this->conductor = new Conductor();
        $this->conductor->email = 'conductor@gmail.com';
        $this->conductor->contrasenya = 'abcdef';
        $this->conductor->nombre = 'nombreconductor';
        $this->conductor->apellidos = 'apellidosconductor';
        $this->conductor->fecha_nac = Carbon::parse('1974-11-11');
        $this->conductor->save();
            
        $this->vehiculo = new Vehiculo();
        $this->vehiculo->marca = 'bmw';
        $this->vehiculo->modelo = 'x1';
        $this->vehiculo->plazas = 5;
        $this->vehiculo->minusvalido = true;
        $this->vehiculo->conductor_email = 'conductor@gmail.es'; //$conductor
        $this->vehiculo->save();

        $this->ruta = new Ruta();
        $this->ruta->origen = 'calle 1';
        $this->ruta->destino = 'calle 2';
        $this->ruta->precio = '5.5';
        $this->ruta->estado = 'Pendiente';
        $this->ruta->cliente_email = 'cliente@gmail.es'; //$cliente
        $this->ruta->vehiculo_codigo = '123'; //$vehiculo
        $this->ruta->save();

        $this->pago = new Pago();
        $this->pago->titular = 'nombretitular';
        $this->pago->fechacad = Carbon::parse('2025-12-05');
        $this->pago->cvc = '123';
        $this->pago->numTarjeta = '1234123412341234';
        $this->pago->save();
        

    }


    /**
     * Comprueba que Cliente y Vehiculo estan relacionados con Ruta
     *
     * @return void
     */
    public function testAssociationClienteVehiculoRuta()
    {

        $this->assertTrue($vehiculo->rutas->contains(['origen'=>'calle 1','destino'=>'calle 2']));
        $this->assertTrue($cliente->rutas->contains(['origen'=>'calle 1','destino'=>'calle 2']));

    }

  
    /**
     * Comprueba que Conductor y Vehiculo estan relacionados
     *
     * @return void
     */
    public function testAssociationVehiculoConductor()
    {
        $this->assertTrue($conductor->vehiculos->contains(['codigo' => '123']));
    }


    public function tearDown():void{

        parent::tearDown();

        $this->vehiculo->delete();
        $this->conductor->delete();
        $this->cliente->delete();
        $this->pago->delete();
        $this->ruta->delete();

    }
}