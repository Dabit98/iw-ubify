<?php

use Illuminate\Database\Seeder;

class Ruta_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruta_user')->delete();

        DB:table('ruta_user')->insert([
            'ruta_id' => 1,
            'user_email' => 'cepedacalvo@gmail.com'
        ]);

        /*DB::table('ruta_user')->insert([
            'ruta_id' => 2,
            'user_email' => 'horseluis@alu.ua.es'
        ]);

        DB::table('ruta_user')->insert([
            'ruta_id' => 3,
            'user_email' => 'rickyrubio@contact.es'
        ]);

        DB::table('ruta_user')->insert([
            'ruta_id' => 4,
            'user_email' => 'ibaillanos@caster.es'
        ]);
         */ 
    }
}
