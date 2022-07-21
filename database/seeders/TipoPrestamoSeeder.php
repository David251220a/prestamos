<?php

namespace Database\Seeders;

use App\Models\TipoPrestamo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TipoPrestamo::create([
            'descripcion' => 'ORDINARIO',
            'sigla' => 'ORD',
            'limite_a_solicitar' => 0,
            'cantidad_a_solicitar' => 0,
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

    }
}
