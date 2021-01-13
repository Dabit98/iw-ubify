<?php

use Illuminate\Database\Seeder;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->delete();
        
        DB::table('vehiculos')->insert([
            'marca'=>'Renault',
            'modelo'=>'Kadjar',
            'plazas'=> 5,
            'minusvalido'=> true ,
            'conductor_email' => 'fernandoalonso@driver.com'

        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'McLaren',
            'modelo'=>'GT',
            'plazas'=> 2,
            'minusvalido'=> false,
            'conductor_email' => 'carlossainz@driver.com'
        ]);
        
        DB::table('vehiculos')->insert([
            'marca'=>'Honda',
            'modelo'=>'Civic',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'marcmarquez@driver.com'
        ]);
        
        DB::table('vehiculos')->insert([
            'marca'=>'Fiat',
            'modelo'=>'Panda',
            'plazas'=> 5,
            'minusvalido'=> false,
            'conductor_email' => 'jorgelorenzo@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Mercedes',
            'modelo'=>'GLA',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'lewishamilton@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Fiat',
            'modelo'=>'500X',
            'plazas'=> 5,
            'minusvalido'=> false,
            'conductor_email' => 'valentinorossi@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Opel',
            'modelo'=>'Insignia',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'sebastianvettel@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Alfa Romeo',
            'modelo'=>'Giulia',
            'plazas'=> 5,
            'minusvalido'=> false,
            'conductor_email' => 'kimiraikkonen@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Seat',
            'modelo'=>'Ibiza',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'maverickvinales@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Ford',
            'modelo'=>'Focus',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'aleixespargaro@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Toyota',
            'modelo'=>'Prius',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'alexrmaquez@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Ford',
            'modelo'=>'Focus',
            'plazas'=> 5,
            'minusvalido'=> false,
            'conductor_email' => 'alexrmaquez@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Dodge',
            'modelo'=>'Caliber',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'alexrins@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Peugeot',
            'modelo'=>'3008',
            'plazas'=> 5,
            'minusvalido'=> true,
            'conductor_email' => 'polespargaro@driver.com'
        ]);

        DB::table('vehiculos')->insert([
            'marca'=>'Mini',
            'modelo'=>'Cooper',
            'plazas'=> 5,
            'minusvalido'=> false,
            'conductor_email' => 'polespargaro@driver.com'
        ]);
    }
}
