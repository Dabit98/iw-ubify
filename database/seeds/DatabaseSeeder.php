<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*
        $this->call(ClientesTableSeeder::class);
        $this->command->info('Clientes table seeded');
*/

        //$this->call(ConductoresTableSeeder::class);
        //$this->command->info('Conductores table seeded');        

       // $this->call(VehiculosTableSeeder::class);
       // $this->command->info('Vehiculos table seeded');

       /* $this->call(RutasTableSeeder::class);
        $this->command->info('Rutas table seeded');

        $this->call(Ruta_VehiculoTableSeeder::class);
        $this->command->info('Ruta_Vehiculo table seeded');

        $this->call(Cliente_RutaTableSeeder::class);
        $this->command->info('Cliente_Ruta table seeded');

        $this->call(PagosTableSeeder::class);
        $this->command->info('Pagos table seeded'); */

	$this->call(UsersTableSeeder::class);
 	$this->command->info('Usuarios table seeded');
    }
}
