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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('documento', 10);
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->date('fecha_nacimiento');
            $table->string('email', 200)->nullable();
            $table->string('foto', 250)->nullable();
            $table->string('direccion', 255);
            $table->string('celular', 20)->nullable();
            $table->string('linea_baja', 20)->nullable();
            $table->foreignId('ciudad_id')->constrained();
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('nacionalidad_id')->constrained();
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
        Schema::dropIfExists('personas');
    }
};
