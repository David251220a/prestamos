<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@dev',
            'password' => Hash::make('admin123456'),
        ])->assignRole('admin');

        //  User::create([
        //      'name' => 'Admin',
        //      'documento' => '4918642',
        //      'email' => 'admin@dev',
        //      'password' => Hash::make('admin123456'),
        //  ])->assignRole('admin');
    }
}
