<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreignId('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
            $table->string('cedula');
             $table->string('nombre');
              $table->string('apellido');
            $table->text('direccion')->nullable();
            $table->string('telefono');
             $table->string('email');  
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
        Schema::dropIfExists('personas');
    }
}
