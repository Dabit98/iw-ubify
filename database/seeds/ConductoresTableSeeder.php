<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConductoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conductores')->delete();
        
        DB::table('conductores')->insert([
            'email'=> 'fernandoalonso@driver.com',
            'password' => 'dss',
            'name' => 'Fernando',
            'surname' => 'Alonso',
            'fecha_nac' => Carbon::parse('1974-10-10')
        ]);
        
        DB::table('conductores')->insert([
            'email'=> 'carlossainz@driver.com',
            'password' => 'dss',
            'name' => 'Carlos',
            'surname' => 'Sainz',
            'fecha_nac' => Carbon::parse('1974-11-11')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'marcmarquez@driver.com',
            'password' => 'dss',
            'name' => 'Marc',
            'surname' => 'Marquez',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'jorgelorenzo@driver.com',
            'password' => 'dss',
            'name' => 'Jorge',
            'surname' => 'Lorenzo',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'lewishamilton@driver.com',
            'password' => 'dss',
            'name' => 'Lewis',
            'surname' => 'Hamilton',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'valentinorossi@driver.com',
            'password' => 'dss',
            'name' => 'Valentino',
            'surname' => 'Rossi',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'sebastianvettel@driver.com',
            'password' => 'dss',
            'name' => 'Sebastian',
            'surname' => 'Vettel',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'kimiraikkonen@driver.com',
            'password' => 'dss',
            'name' => 'Kimi',
            'surname' => 'Raikkonen',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'maverickvinales@driver.com',
            'password' => 'dss',
            'name' => 'Vaverick',
            'surname' => 'Vinales',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'aleixespargaro@driver.com',
            'password' => 'dss',
            'name' => 'Aleix',
            'surname' => 'Espargaro',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'alexrmaquez@driver.com',
            'password' => 'dss',
            'name' => 'Alex',
            'surname' => 'Marquez',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'alexrins@driver.com',
            'password' => 'dss',
            'name' => 'Alex',
            'surname' => 'Rins',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);

        DB::table('conductores')->insert([
            'email'=> 'polespargaro@driver.com',
            'password' => 'dss',
            'name' => 'Pol',
            'surname' => 'Espargaro',
            'fecha_nac' => Carbon::parse('1974-12-12')
        ]);
    }
}
