<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  $table->bigIncrements('id');
     *  $table->string('titular');
     *  $table->date('fechacad');
     *  $table->integer('cvc');
     *  $table->bigInteger('numTarjeta');
     *  $table->string('cliente_email');
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->delete();

        DB::table('pagos')->insert([
            'titular' => 'Cepeda Calvo',
            'fechacad' => Carbon::parse('2021-01-01'),
            'cvc' => 456,
            'numTarjeta' =>'1234123456785678',
            'user_email' => 'cepedacalvo@gmail.com'
        
            /*
            'titular' => 'Horse Luis',
            'fechacad' => Carbon::parse('2014-07-01'),
            'cvc' => 110,
            'numTarjeta' => '1234567890123456',
            'user_email' => 'horseluis@alu.ua.es'
        ]);

        DB::table('pagos')->insert([
            'titular' => 'Ricky Rubio',
            'fechacad' => Carbon::parse('2021-01-01'),
            'cvc' => 184,
            'numTarjeta' => '1234123412341234',
            'user_email' => 'rickyrubio@contact.es'
        ]);

        DB::table('pagos')->insert([
            'titular' => 'Ibai Llanos',
            'fechacad' => Carbon::parse('2021-07-01'),
            'cvc' => 368,
            'numTarjeta' => '0000111122223333',
            'user_email' => 'ibaillanos@caster.es'
        ]);

        DB::table('pagos')->insert([ 
            'titular' => 'Ibai Llanos',
            'fechacad' => Carbon::parse('2021-07-01'),
            'cvc' => 368,
            'numTarjeta' => '0000111122223333',
            'user_email' => 'ibaillanos@caster.es'*/
        ]);

        
    }
}
