<?php

use Illuminate\Database\Seeder;

class Cliente_RutaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente_ruta')->delete();

        DB::table('cliente_ruta')->insert([
            'cliente_email' => 'horseluis@alu.ua.es',
            'ruta_id' => 1
        ]);

        DB::table('cliente_ruta')->insert([
            'cliente_email' => 'rickyrubio@contact.es',
            'ruta_id' => 2
        ]);

        DB::table('cliente_ruta')->insert([
            'cliente_email' => 'ibaillanos@caster.es',
            'ruta_id' => 3
        ]);

        DB::table('cliente_ruta')->insert([
            'cliente_email' => 'ibaillanos@caster.es',
            'ruta_id' => 4
        ]);


    }
}
