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
        Schema::create('parametro_generals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa', 200);
            $table->integer('tasa');
            $table->integer('monto_multa');
            $table->integer('dias_de_gracia');
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
        Schema::dropIfExists('parametro_generals');
    }
};
