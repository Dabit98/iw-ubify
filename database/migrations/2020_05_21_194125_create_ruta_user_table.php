<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_user', function (Blueprint $table) {
            $table->unsignedBigInteger('ruta_id');
            $table->string('user_email');
            $table->primary(['ruta_id', 'user_email']);
            $table->foreign('ruta_id')->references('id')->on('rutas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_email')->references('email')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ruta_user');
    }
}
