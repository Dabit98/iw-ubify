<?php

use Illuminate\Database\Seeder;

class RutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * una zona: 7,35€; dos zonas: 8,90 €;
     * tres zonas: 11,35 €; cuatro zonas: 14,90 €;
     * @return void
     */
    public function run()
    {
        DB::table('rutas')->delete();
        
        DB::table('rutas')->insert([
            'origen' => 'A',
            'destino' => 'B',
            'precio' => '8.90',
            'estado' => 'Finalizado'
        ]);

        DB::table('rutas')->insert([
            'origen' => 'A',
            'destino' => 'C',
            'precio' => '11.35',
            'estado' => 'Finalizado'
        ]);

        DB::table('rutas')->insert([
            'origen' => 'D',
            'destino' => 'A',
            'precio' => '14.90',
            'estado' => 'Finalizado'
        ]);

        DB::table('rutas')->insert([
            'origen' => 'D',
            'destino' => 'D',
            'precio' => '7.35',
            'estado' => 'Finalizado'
        ]);
    }
}
