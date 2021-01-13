<?php

use Illuminate\Database\Seeder;

class Ruta_VehiculoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruta_vehiculo')->delete();

        DB::table('ruta_vehiculo')->insert([
            'ruta_id' => 1,
            'vehiculo_codigo' => 1
        ]);

        DB::table('ruta_vehiculo')->insert([
            'ruta_id' => 2,
            'vehiculo_codigo' => 7
        ]);

        DB::table('ruta_vehiculo')->insert([
            'ruta_id' => 3,
            'vehiculo_codigo' => 10
        ]);

        DB::table('ruta_vehiculo')->insert([
            'ruta_id' => 4,
            'vehiculo_codigo' => 10
        ]);


    }
}
