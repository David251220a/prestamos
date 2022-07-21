<?php

namespace Database\Seeders;

use App\Models\SolicitudEstado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitudEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SolicitudEstado::create([
            'descripcion' => 'SOLICITADO',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        SolicitudEstado::create([
            'descripcion' => 'APROBADO',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);

        SolicitudEstado::create([
            'descripcion' => 'RECHAZADO',
            'estado_id' => 1,
            'usuario_alta' => 1,
            'usuario_modificacion' => 1,
        ]);
    }
}
