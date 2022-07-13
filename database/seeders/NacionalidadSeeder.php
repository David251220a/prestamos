<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidad::create([
            'descripcion' => 'SIN ESPECIFICAR',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        Nacionalidad::create([
            'descripcion' => 'PARAGUAYA',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        Nacionalidad::create([
            'descripcion' => 'ARGENTINA',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);
    }
}
