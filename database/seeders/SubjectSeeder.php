<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
        'id'=> 1,
        'nombre'=>'Matemáticas',
        'inthoraria'=> 6
        ]);

        Subject::create([
        'id'=> 2,
        'nombre'=>'Español',
        'inthoraria'=> 4
        ]);

        Subject::create([
        'id'=> 3,
        'nombre'=>'Python',
        'inthoraria'=> 10
        ]);

        Subject::create([
        'id'=> 4,
        'nombre'=>'Inglés',
        'inthoraria'=> 6
        ]);

    }
}
