<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->string('nombre');
            $table->string('modelo');  
            $table->string('serie'); 
            $table->text('descripcion')->nullable();
            $table->string('codigoqr');     
            $table->boolean('estado');
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
        Schema::dropIfExists('equipos');
    }
}
