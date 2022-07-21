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
        Schema::create('prestamo_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestamo_id')->constrained();
            $table->date('fecha_vencimiento');
            $table->date('fecha_cobro')->nullable();
            $table->integer('cuota')->default(0);
            $table->decimal('monto_cuota', 12, 0)->default(0);
            $table->decimal('monto_cuota_cobrado', 12, 0)->default(0);
            $table->decimal('interes', 12, 0)->default(0);
            $table->decimal('interes_cobrado', 12, 0)->default(0);
            $table->decimal('capital', 12, 0)->default(0);
            $table->decimal('capital_cobrado', 12, 0)->default(0);
            $table->decimal('multa', 12, 0)->default(0);
            $table->decimal('multa_cobrado', 12, 0)->default(0);
            $table->decimal('iva', 12, 0)->default(0);
            $table->decimal('iva_cobrado', 12, 0)->default(0);
            $table->unsignedBigInteger('cobro_id')->nullable();
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
        Schema::dropIfExists('prestamo_detalles');
    }
};
