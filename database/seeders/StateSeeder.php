<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'id'=> 1,
            'nombre'=>'Risaralda',
            'id_pais'=> 1
        ]);

        State::create([
            'id'=> 2,
            'nombre'=>'Antioquia',
            'id_pais'=> 1
        ]);

        State::create([
            'id'=> 3,
            'nombre'=>'Cundinamarca',
            'id_pais'=> 1
        ]);

        State::create([
            'id'=> 4,
            'nombre'=>'Aragua',
            'id_pais'=> 2
        ]);

        State::create([
            'id'=> 5,
            'nombre'=>'Carabobo',
            'id_pais'=>2
        ]);
    }
}
