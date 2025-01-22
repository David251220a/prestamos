<?php

namespace Database\Seeders;

use App\Models\TipoCalculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            RoleSeeder::class,
            Usuario::class,
            Estado::class,
            Ciudad::class,
            NacionalidadSeeder::class,
            TipoPrestamoSeeder::class,
            SolicitudEstadoSeeder::class,
        ]);

        TipoCalculo::created(['descripcion' => 'FRANCES']);
        TipoCalculo::created(['descripcion' => 'ALEMAN']);

    }
}
