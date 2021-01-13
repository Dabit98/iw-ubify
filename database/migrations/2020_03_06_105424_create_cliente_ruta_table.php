<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteRutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_ruta', function (Blueprint $table) {
            $table->string('cliente_email');
            $table->unsignedBigInteger('ruta_id');
            $table->primary(['cliente_email', 'ruta_id']);
            $table->foreign('cliente_email')->references('email')->on('clientes')
                                        ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ruta_id')->references('id')->on('rutas')
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
        Schema::dropIfExists('cliente_ruta');
    }
}
