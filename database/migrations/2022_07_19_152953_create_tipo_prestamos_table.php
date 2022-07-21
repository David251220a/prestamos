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
        Schema::create('tipo_prestamos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->string('sigla', 20);
            $table->boolean('limite_a_solicitar')->default(false);
            $table->integer('cantidad_a_solicitar')->default(0);
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
        Schema::dropIfExists('tipo_prestamos');
    }
};
