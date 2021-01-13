<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_vehiculo', function (Blueprint $table) {
            $table->unsignedBigInteger('ruta_id');
            $table->unsignedBigInteger('vehiculo_codigo');
            $table->primary(['ruta_id', 'vehiculo_codigo']);
            $table->foreign('ruta_id')->references('id')->on('rutas')
                                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('vehiculo_codigo')->references('codigo')->on('vehiculos')
                                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruta_vehiculo');
    }
}
