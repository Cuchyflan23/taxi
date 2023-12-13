<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario; // Asegúrate de importar el modelo User

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Elimina registros existentes antes de insertar nuevos datos
        //DB::table('funcionario')->truncate();

        // Inserta usuarios de ejemplo
        Funcionario::create([
            'cedula' => '1103668560',
            'nombres' => 'Jorge Luis Montesinos Quezada',
            'fechaIngreso' => '2005-11-14',
            'departamento' => 'Administrativo Financiero',
            'area' => 'Soporte Informático',
            'correo' => 'jlmontesinos@sri.gob.ec',
            'cedulaJefe' => '1102087283',
            'estado' => 'Activo',
            'user_id' => '1',
            'accesos' => 'Administrador',
            'cedulaJefeDepartamento' => '1102087283',
            'fechaNombramiento' => '2007-04-01',
            'cargo' => 'Soporte Informático',
            'grupo' => 'SPU 4',
            'sueldo' => '1086.00',
            'codigoPuesto' => '6146',
            'genero' => 'Señor',
            'relacionLaboral' => 'Nombramiento Provisional',
        ]);

        Funcionario::create([
            'cedula' => '1103596134',
            'nombres' => 'Milton Antonio Paute Correa',
            'fechaIngreso' => '2007-01-08',
            'departamento' => 'Administrativo',
            'area' => 'Administrativa',
            'correo' => 'mapaute@sri.gob.ec',
            'cedulaJefe' => '1102087283',
            'estado' => 'Activo',
            'user_id' => '2',
            'accesos' => 'Custodio',
            'cedulaJefeDepartamento' => '1102087283',
            'fechaNombramiento' => '2007-01-08',
            'cargo' => 'Conductor Administrativo',
            'grupo' => 'CHOFER',
            'sueldo' => '987.00',
            'codigoPuesto' => '4346',
            'genero' => 'Señor',
            'relacionLaboral' => 'Nombramiento Definitivo',
        ]);

        // Puedes agregar más usuarios según sea necesario

        // O puedes usar la fábrica de usuarios para generar datos de prueba
        // \App\Models\User::factory(10)->create();
    }
}
