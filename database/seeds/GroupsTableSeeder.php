<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $faker = \Faker\Factory::create();

        // Creamos 4 cursos
        factory(App\Course::class, 4)->create();

        // Por cada curso tendremos 2 niveles (Ej.: 1DAM, 2DAM)
        // Y por cada nivel 2 grupos (Ej.: 1DAM-A, 1DAM-B, 2DAM-A, 2DAM-B)
        for ($i = 1; $i <= 4; $i++) {
            factory(App\Level::class)
                ->create([
                    'course_id' => $i,
                    'level' => 1
                ]);

            factory(App\Level::class)
                ->create([
                    'course_id' => $i,
                    'level' => 2
                ]);

            for ($j = 1; $j <= 2; $j++) {
                factory(App\Group::class)
                    ->create([
                        'letter_group' => ($j == 1) ? 'A' : 'B',
                        'level_id' => $i
                    ]);
            }
        }

        // Crearemos 6 modulos (asignaturas) por nivel = 6*8 = 48
        for ($i = 1; $i <= 48; $i++) {
            factory(App\Module::class)
                ->create([
                    'name' => $faker->unique(true)->jobTitle,
                ]);
        }

        // Creamos una asignatura que será compartida por varios módulos
        factory(App\Module::class)
            ->create([
                'name' => "Inglés"
            ]);

        // Asignamos las asignaturas a los módulos
        $modulo = 1;
        $level = 1;

        while ($modulo <= 48) {

            factory(App\LevelModule::class)
                ->create([
                    'level_id' => $level,
                    'module_id' => $modulo
                ]);

            if($modulo % 6 == 0.00000000) {

                factory(App\LevelModule::class)
                    ->create([
                        'level_id' => $level,
                        'module_id' => 49 // Inglés es la última en todos los niveles
                    ]);

                $level++;

            }

            $modulo++;
        }

        // Creamos los roles
        factory(App\Role::class)->create(); // Admin
        factory(App\Role::class)->create([
            'role' => 'Teacher'
        ]);
        factory(App\Role::class)->create([
            'role' => 'Student'
        ]);


        // Creamos 20 usuarios por nivel (160)
        factory(App\User::class, 160)->create();
        $group = 1;
        for ($i = 1; $i <= 160; $i++) {

            // Asignamos el rol de 'Student' a los 160 usuarios
            factory(App\RoleUser::class)->create([
                'role_id' => 3, // Student
                'user_id' => $i
            ]);

            // Asignamos los estudiantes a los grupos
            factory(App\Student::class)->create([
                'user_id' => $i,
                'group_id' => $group
            ]);

            $group = ($i % 20) == 0.00000000 ? ++$group:$group; // 20 estudiantes por grupo
        }

        // Creamos 8 'Teachers' (Tutores), uno por grupo
        factory(App\User::class, 8)->create();

        $module = 1;
        for ($i = 161; $i <= 168; $i++){
            // Asignamos el rol de 'Teacher' a los 8 usuarios
            factory(App\RoleUser::class)->create([
                'role_id' => 2, // Teacher
                'user_id' => $i
            ]);

            // Asignamos estos profesores a los grupos creados
            factory(App\Teacher::class)->create([
                'user_id' => $i,
                'group_id' => $i - 160,
                // Cada uno de estos profesores será tutor del grupo asignado
                'tutor' => true
            ]);
        }
/*
        // A parte del tutor, cada grupo tendrá 3 profesores mas
        factory(App\Teacher::class)->create([
            'user_id' => $i,
            'group_id' => $i - 160
        ]);

*/


    }

}