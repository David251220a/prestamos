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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained();
            $table->integer('anio');
            $table->integer('numero_solicitud');
            $table->foreignId('tipo_prestamo_id')->constrained();
            $table->integer('plazo')->default(0);
            $table->integer('plazo_aprobado')->default(0);
            $table->integer('tasa');
            $table->decimal('monto_solicitado', 12, 0)->default(0);
            $table->decimal('monto_aprobado', 12, 0)->default(0);
            $table->foreignId('solicitud_estado_id')->constrained();
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
        Schema::dropIfExists('solicituds');
    }
};
