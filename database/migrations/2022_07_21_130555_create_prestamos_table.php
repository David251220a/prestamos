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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained();
            $table->foreignId('tipo_calculo_id')->constrained();
            $table->integer('anio');
            $table->integer('numero_prestamo');
            $table->foreignId('tipo_prestamo_id')->constrained();
            $table->integer('plazo')->default(0);
            $table->integer('tasa');
            $table->decimal('monto', 12, 0)->default(0);
            $table->foreignId('prestamo_estado_id')->constrained();
            $table->foreignId('solicitud_id')->constrained();
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
        Schema::dropIfExists('prestamos');
    }
};
