<?php

namespace Database\Seeders;

use App\Models\Estado as ModelsEstado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsEstado::create([
            'descripcion' => 'ACTIVO',
        ]);

        ModelsEstado::create([
            'descripcion' => 'INACTIVO',
        ]);
    }
}
