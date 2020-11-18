<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreignId('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('fecha_entrega');
            $table->date('fecha_recepcion');
            $table->text('descripcion')->nullable();  
            $table->boolean('estado');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_persona');
    }
}
