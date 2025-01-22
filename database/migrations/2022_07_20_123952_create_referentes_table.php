<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained();
            $table->string('cedula', 10);
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->string('celular', 20)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('usuario_alta')->references('id')->on('users');
            $table->foreignId('usuario_modificacion')->references('id')->on('users');
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
        Schema::dropIfExists('referentes');
    }
};
