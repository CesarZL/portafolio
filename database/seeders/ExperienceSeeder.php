<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Experience::factory()->create([
            'position' => 'Voluntariado',
            'place' => 'Un Cachito de Luz A.C.',
            'description' => 'Diseño de base datos y sistema de captura de entrega de donaciones de medicamentos realizado en Visual Basic.',
            'start_date' => '2017-01-01',
            'end_date' => '2022-01-01',
        ]);

        \App\Models\Experience::factory()->create([
            'position' => 'Dessarrollador Full-Stack',
            'place' => 'ITACE',
            'description' => 'Diseño y desarrollo de una aplicación .NET programada en Visual Basic que permite el registro de asistencia con códigos QR y alerta a los tutores de la actividad de entrada y salida del plantel.',
            'start_date' => '2020-02-01',
            'end_date' => '2020-03-01',
        ]);

        \App\Models\Experience::factory()->create([
            'position' => 'Dessarrollador Back-End',
            'place' => 'Cactu Nieves',
            'description' => 'Diseño, desarrollo e implementación de una aplicación .NET programada en C# que permite el control sobre los procesos de venta y administración de la empresa.',
            'start_date' => '2022-03-01',
            'end_date' => '2022-04-01',
        ]);

        \App\Models\Experience::factory()->create([
            'position' => 'Desarrollador Front-End',
            'place' => 'SVAM international',
            'description' => 'Creación y ejecución de la actualización de la interfaz de la aplicación web LEADS, utilizando Bootstrap 5, incorporando Datatables y Google Charts',
            'start_date' => '2022-01-01',
            'end_date' => '2022-02-01',
        ]);

        \App\Models\Experience::factory()->create([
            'position' => 'Desarrollador Full-Stack',
            'place' => 'UPV',
            'description' => 'Diseño y desarrollo de una aplicación en LARAVEL y FLASK en conjunto con ARDUINO que permite el pase de lista con reconocimiento facial a alumnos de la Universidad Politécnica de Victoria, en proceso de implementación interno de la institución.',
            'start_date' => '2023-09-01',
            'end_date' => '2023-12-01',
        ]);




    }
}


