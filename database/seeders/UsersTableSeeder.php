<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Asegúrate de importar el modelo User

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Elimina registros existentes antes de insertar nuevos datos
        //DB::table('users')->truncate();

        // Inserta usuarios de ejemplo

        User::create([
            'name' => 'Jorge Luis Montesinos Quezada',
            'email' => 'jlmontesinosq@gmail.com',
            'usuario' => '141105',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Milton Antonio Paute Correa',
            'email' => 'mapaute@sri.gob.ec',
            'usuario' => '80107',
            'password' => bcrypt('12345678'),
        ]);

        // Puedes agregar más usuarios según sea necesario

        // O puedes usar la fábrica de usuarios para generar datos de prueba
        // \App\Models\User::factory(10)->create();
    }
}
