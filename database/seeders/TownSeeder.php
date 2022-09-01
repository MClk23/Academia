<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Town::create([
            'id'=> 1,
            'nombre'=>'Pereira',
            'id_depa'=> 1
        ]);

        Town::create([
            'id'=> 2,
            'nombre'=>'Dosquebradas',
            'id_depa'=> 1
        ]);

        Town::create([
            'id'=> 3,
            'nombre'=>'Medellin',
            'id_depa'=> 2
        ]);

        Town::create([
            'id'=> 4,
            'nombre'=>'Envigado',
            'id_depa'=> 2
        ]);

        Town::create([
            'id'=> 5,
            'nombre'=>'Bogotá',
            'id_depa'=> 3
        ]);

        Town::create([
            'id'=> 6,
            'nombre'=>'Madrid',
            'id_depa'=> 3
        ]);

        Town::create([
            'id'=> 7,
            'nombre'=>'Bolivar',
            'id_depa'=> 4
        ]);

        Town::create([
            'id'=> 8,
            'nombre'=>'Camatagua',
            'id_depa'=> 4
        ]);

        Town::create([
            'id'=> 9,
            'nombre'=>'Guacara',
            'id_depa'=> 5
        ]);

        Town::create([
            'id'=> 10,
            'nombre'=>'Diego Ibarra',
            'id_depa'=> 5
        ]);
    }
}
