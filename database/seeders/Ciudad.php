<?php

namespace Database\Seeders;

use App\Models\Ciudad as ModelsCiudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ciudad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsCiudad::create([
            'descripcion' => 'SIN ESPECIFICAR',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        ModelsCiudad::create([
            'descripcion' => 'ASUNCION',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        ModelsCiudad::create([
            'descripcion' => 'SAN LORENZO',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        ModelsCiudad::create([
            'descripcion' => 'LIMPIO',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);
    }
}
