<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'email'=>'admin@admin',
            'password'=>'$2y$10$8l8F.pTmn5RR7wbGCIHrKuRuivLsPx.z/B6rRiqJ7ZVpbJhkc2x66',
            'name'=>'admin',
            'surname'=>'admin',
	 'fecha_nac' => Carbon::parse('1979-12-12')
        ]);
/*
        DB::table('clientes')->insert([
            'email'=>'horseluis@alu.ua.es',
            'contrasenya'=>'dss',
            'nombre'=>'Horse Luis',
            'apellidos'=>'Herrero Corcel',
            'fecha_nac' => Carbon::parse('1979-12-12')
        ]);
        
        DB::table('clientes')->insert([
            'email'=>'badBunny@universal.pr',
            'contrasenya'=>'dss',
            'nombre'=>'Benito Antonio',
            'apellidos'=>'Martinez Ocasio',
            'fecha_nac' => Carbon::parse('1994-10-10')
        ]);

        DB::table('clientes')->insert([
            'email'=>'ibaillanos@caster.es',
            'contrasenya'=>'dss',
            'nombre'=>'Ibai',
            'apellidos'=>'Llanos',
            'fecha_nac' => Carbon::parse('1998-11-10')
        ]);

        DB::table('clientes')->insert([
            'email'=>'karolg@universal.com',
            'contrasenya'=>'dss',
            'nombre'=>'Karol',
            'apellidos'=>'G',
            'fecha_nac' => Carbon::parse('1990-10-12')
        ]);

        DB::table('clientes')->insert([
            'email'=>'paquitasalas@manager.es',
            'contrasenya'=>'dss',
            'nombre'=>'Paquita',
            'apellidos'=>'Salas',
            'fecha_nac' => Carbon::parse('1994-10-11')
        ]);

        DB::table('clientes')->insert([
            'email'=>'sergioramos@contact.es',
            'contrasenya'=>'dss',
            'nombre'=>'Sergio',
            'apellidos'=>'Ramos',
            'fecha_nac' => Carbon::parse('1974-10-10')
        ]);

        DB::table('clientes')->insert([
            'email'=>'rickyrubio@contact.es',
            'contrasenya'=>'dss',
            'nombre'=>'Ricky',
            'apellidos'=>'Rubio',
            'fecha_nac' => Carbon::parse('1974-10-10')
        ]);

        DB::table('clientes')->insert([
            'email'=>'rosalia@universal.es',
            'contrasenya'=>'dss',
            'nombre'=>'Rosalia',
            'apellidos'=>'Vila',
            'fecha_nac' => Carbon::parse('1974-10-10')
        ]);

        DB::table('clientes')->insert([
            'email'=>'ctangana@universal.es',
            'contrasenya'=>'dss',
            'nombre'=>'C',
            'apellidos'=>'Tangana',
            'fecha_nac' => Carbon::parse('1974-10-10')
        ]);
*/
    }
}
