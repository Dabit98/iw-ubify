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

class DataTest extends TestCase
{
    /**
     * Numero y propiedades de Cliente
     *
     * @return void
     */
    public function testCliente()
    {
        $count = Cliente::all()->count();
        $this->assertEquals($count, 10);

        $this->assertDatabaseHas('clientes', ['email' => 'cepedacalvo@gmail.com', 'contrasenya' => 'dss', 'nombre' => 'Cepeda', 'apellidos' => 'Calvo Deltodo', 'fecha_nac' => Carbon::parse('1974-10-10')]);
        $this->assertDatabaseHas('clientes', ['email' => 'horseluis@alu.ua.es', 'contrasenya' => 'dss', 'nombre' => 'Horse Luis', 'apellidos' => 'Herrero Corcel', 'fecha_nac' => Carbon::parse('1979-12-12')]);
        $this->assertDatabaseHas('clientes', ['email' => 'badBunny@universal.pr', 'contrasenya' => 'dss', 'nombre' => 'Benito Antonio', 'apellidos' => 'Martinez Ocasio', 'fecha_nac' => Carbon::parse('1994-10-10')]);
        $this->assertDatabaseHas('clientes', ['email' => 'ibaillanos@caster.es','contrasenya'=>'dss','nombre'=>'Ibai','apellidos'=>'Llanos','fecha_nac' => Carbon::parse('1998-11-10')]);
        $this->assertDatabaseHas('clientes', ['email'=>'karolg@universal.com','contrasenya'=>'dss','nombre'=>'Karol','apellidos'=>'G','fecha_nac' => Carbon::parse('1990-10-12')]);
        $this->assertDatabaseHas('clientes', ['email'=>'paquitasalas@manager.es','contrasenya'=>'dss','nombre'=>'Paquita','apellidos'=>'Salas','fecha_nac' => Carbon::parse('1994-10-11')]);
        $this->assertDatabaseHas('clientes', ['email'=>'sergioramos@contact.es','contrasenya'=>'dss','nombre'=>'Sergio','apellidos'=>'Ramos','fecha_nac' => Carbon::parse('1974-10-10')]);
        $this->assertDatabaseHas('clientes', ['email'=>'rickyrubio@contact.es','contrasenya'=>'dss','nombre'=>'Ricky','apellidos'=>'Rubio','fecha_nac' => Carbon::parse('1974-10-10')]);
        $this->assertDatabaseHas('clientes', ['email'=>'rosalia@universal.es','contrasenya'=>'dss','nombre'=>'Rosalia','apellidos'=>'Vila','fecha_nac' => Carbon::parse('1974-10-10')]);
        $this->assertDatabaseHas('clientes', ['email'=>'ctangana@universal.es','contrasenya'=>'dss','nombre'=>'C','apellidos'=>'Tangana','fecha_nac' => Carbon::parse('1974-10-10')]);            

    }

    /**
     * Numero y propiedades de Vehiculo
     *
     * @return void
     */
    public function testVehiculo()
    {
        $count = Vehiculo::all()->count();
        $this->assertEquals($count, 15);

        $this->assertDatabaseHas('vehiculos', ['marca'=>'Renault','modelo'=>'Kadjar','plazas'=> 5,'minusvalido'=> true ,'conductor_email' => 'fernandoalonso@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'McLaren','modelo'=>'GT','plazas'=> 2,'minusvalido'=> false,'conductor_email' => 'carlossainz@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Honda','modelo'=>'Civic','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'marcmarquez@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Fiat','modelo'=>'Panda','plazas'=> 5,'minusvalido'=> false,'conductor_email' => 'jorgelorenzo@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Mercedes','modelo'=>'GLA','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'lewishamilton@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Fiat','modelo'=>'500X','plazas'=> 5,'minusvalido'=> false,'conductor_email' => 'valentinorossi@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Opel','modelo'=>'Insignia','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'sebastianvettel@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Alfa Romeo','modelo'=>'Giulia','plazas'=> 5,'minusvalido'=> false,'conductor_email' => 'kimiraikkonen@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Seat','modelo'=>'Ibiza','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'maverickvinales@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Ford','modelo'=>'Focus','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'aleixespargaro@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Toyota','modelo'=>'Prius','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'alexrmaquez@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Ford','modelo'=>'Focus','plazas'=> 5,'minusvalido'=> false,'conductor_email' => 'alexrmaquez@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Dodge','modelo'=>'Caliber','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'alexrins@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Peugeot','modelo'=>'3008','plazas'=> 5,'minusvalido'=> true,'conductor_email' => 'polespargaro@driver.com']);
        $this->assertDatabaseHas('vehiculos', ['marca'=>'Mini','modelo'=>'Cooper','plazas'=> 5,'minusvalido'=> false,'conductor_email' => 'polespargaro@driver.com']);


    }

    /**
     * Numero y propiedades de Conductor
     *
     * @return void
     */
    public function testConductor()
    {
        $count = Conductor::all()->count();
        $this->assertEquals($count, 13);

        $this->assertDatabaseHas('conductores', ['email'=> 'fernandoalonso@driver.com','contrasenya' => 'dss','nombre' => 'Fernando','apellidos' => 'Alonso','fecha_nac' => Carbon::parse('1974-10-10')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'carlossainz@driver.com','contrasenya' => 'dss','nombre' => 'Carlos','apellidos' => 'Sainz','fecha_nac' => Carbon::parse('1974-11-11')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'marcmarquez@driver.com','contrasenya' => 'dss','nombre' => 'Marc','apellidos' => 'Marquez','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'jorgelorenzo@driver.com','contrasenya' => 'dss','nombre' => 'Jorge','apellidos' => 'Lorenzo','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'lewishamilton@driver.com','contrasenya' => 'dss','nombre' => 'Lewis','apellidos' => 'Hamilton','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'valentinorossi@driver.com','contrasenya' => 'dss','nombre' => 'Valentino','apellidos' => 'Rossi','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'sebastianvettel@driver.com','contrasenya' => 'dss','nombre' => 'Sebastian','apellidos' => 'Vettel','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'kimiraikkonen@driver.com','contrasenya' => 'dss','nombre' => 'Kimi','apellidos' => 'Raikkonen','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'maverickvinales@driver.com','contrasenya' => 'dss','nombre' => 'Vaverick','apellidos' => 'Vinales','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'aleixespargaro@driver.com','contrasenya' => 'dss','nombre' => 'Aleix','apellidos' => 'Espargaro','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'alexrmaquez@driver.com','contrasenya' => 'dss','nombre' => 'Alex','apellidos' => 'Marquez','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'alexrins@driver.com','contrasenya' => 'dss','nombre' => 'Alex','apellidos' => 'Rins','fecha_nac' => Carbon::parse('1974-12-12')]);
        $this->assertDatabaseHas('conductores', ['email'=> 'polespargaro@driver.com','contrasenya' => 'dss','nombre' => 'Pol','apellidos' => 'Espargaro','fecha_nac' => Carbon::parse('1974-12-12')]);

       
    }


    /**
     * Numero y propiedades de Ruta
     *
     * @return void
     */
    public function testRuta()
    {
        $count = Ruta::all()->count();
        $this->assertEquals($count, 4);

        $this->assertDatabaseHas('rutas', ['origen' => 'A','destino' => 'B','precio' => '8.90','estado' => 'Finalizado']);
        $this->assertDatabaseHas('rutas', ['origen' => 'A','destino' => 'C','precio' => '11.35','estado' => 'Finalizado']);
        $this->assertDatabaseHas('rutas', ['origen' => 'D','destino' => 'A','precio' => '14.90','estado' => 'Finalizado']);
        $this->assertDatabaseHas('rutas', ['origen' => 'D','destino' => 'D','precio' => '7.35','estado' => 'Finalizado']);

       
    }

    /**
     * Numero y propiedades de Pago
     *
     * @return void
     */
    public function testPago()
    {
        $count = Pago::all()->count();
        $this->assertEquals($count, 3);

        $this->assertDatabaseHas('pagos', ['titular' => 'Horse Luis','fechacad' => Carbon::parse('2014-07-01'),'cvc' => 110,'numTarjeta' => '1234567890123456','cliente_email' => 'horseluis@alu.ua.es']);
        $this->assertDatabaseHas('pagos', ['titular' => 'Ricky Rubio','fechacad' => Carbon::parse('2021-01-01'),'cvc' => 184,'numTarjeta' => '1234123412341234','cliente_email' => 'rickyrubio@contact.es']);
        $this->assertDatabaseHas('pagos', ['titular' => 'Ibai Llanos','fechacad' => Carbon::parse('2021-07-01'),'cvc' => 368,'numTarjeta' => '0000111122223333','cliente_email' => 'ibaillanos@caster.es']);
       
    }


     /**
     * Vehiculos asociados a Conductor 
     *
     * @return void
     */
    public function testVehiculosPorConductor()
    {
         
        $conductor = Conductor::where('email', 'fernandoalonso@driver.com')->first();
        $this->assertEquals($conductor->vehiculos->count(), 1);
        $this->assertTrue($conductor->vehiculos->contains('codigo', '1'));

        $conductor = Conductor::where('email', 'alexrmaquez@driver.com')->first();
        $this->assertEquals($conductor->vehiculos->count(), 2);
        $this->assertTrue($conductor->vehiculos->contains('codigo', '11'));
        $this->assertTrue($conductor->vehiculos->contains('codigo', '12'));
      
    }

    /**
     * Pagos asociados a Cliente
     *
     * @return void
     */
    public function testPagosPorCliente()
    {
         
        $cliente = Cliente::where('email', 'horseluis@alu.ua.es')->first();
        $this->assertEquals($cliente->pagos->count(), 1);
        $this->assertTrue($cliente->pagos->contains('codigo', '1'));

        $cliente = Cliente::where('email', 'ibaillanos@caster.es')->first();
        $this->assertEquals($cliente->pagos->count(), 2);
        $this->assertTrue($cliente->pagos->contains('codigo', '3'));
        $this->assertTrue($cliente->pagos->contains('codigo', '4'));
      
    }

    
    /**
     * Rutas asociadas a Cliente y Vehiculo
     *
     * @return void
     */
    public function testRutas()
    {

        $cliente = Cliente::where('email', 'horseluis@alu.ua.es')->first();
        $this->assertEquals($cliente->rutas->count(), 1);
        $vehiculo = Vehiculo::where('codigo', '1')->first();
        $this->assertEquals($vehiculo->rutas->count(), 1);
        $this->assertTrue($cliente->rutas->contains('ruta_id', '1'));
        $this->assertTrue($vehiculo->rutas->contains('ruta_id', '1'));

        $cliente = Cliente::where('email', 'ibaillanos@caster.es')->first();
        $this->assertEquals($cliente->rutas->count(), 1);
        $vehiculo = Vehiculo::where('codigo', '10')->first();
        $this->assertEquals($vehiculo->rutas->count(), 1);
        $this->assertTrue($cliente->rutas->contains('ruta_id', '3'));
        $this->assertTrue($cliente->rutas->contains('ruta_id', '4'));
        $this->assertTrue($vehiculo->rutas->contains('ruta_id', '3'));
        $this->assertTrue($vehiculo->rutas->contains('ruta_id', '4'));
        
    }

    
}