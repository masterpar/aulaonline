<?php

use App\Course;
use App\Requirement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

        factory(\App\User::class, 1)->create([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('secret'),
        	'password' => bcrypt('secret'),
        	'role_id' => \App\Role::ADMIN,
        ])
        																		// 1 usuario
        ->each(function (\App\User $u){
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

       																			 // 50 estudiantes
         factory(\App\User::class, 50)->create()
		 ->each(function (\App\User $u){
		 factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        																		// 10 profesores
         factory(\App\User::class, 10)->create()
		 ->each(function (\App\User $u){
		 factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
		 factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
        });


		 factory(\App\Level::class, 1)->create(['name' => 'Beginner']);         //3 niveles
		 factory(\App\Level::class, 1)->create(['name' => 'intermediate']);
		 factory(\App\Level::class, 1)->create(['name' => 'Advanced']);

		 factory(\App\Category::class, 5)->create();                           //5 Categorias	


         factory(\App\Course::class, 50)
         ->create()
         ->each(function (\App\Course $c){
         $c->goals()->saveMany(factory(\App\Goal::class,2)->create());
         $c->requirements()->saveMany(factory(\App\Requirement::class,4)->create());
        });
    }
}
