<?php

namespace Tests\Unit;

use App\Models\Curso;
use Tests\TestCase;
use Illuminate\Http\Response;

class CursosTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_cursos_duplicate()
    {
        $curso1 = Curso::make([
            'nombre' => 'Php Laravel',
            'descripcion'=> 'Aprenderas laravel basico',
            'duracion'=> 200
        ]);

        $curso2 = Curso::make([
            'nombre' => 'Curso Css',
            'descripcion'=> 'Aprenderas Css, para mejorar tus vistas html',
            'duracion'=> 20
        ]);

        $this->assertTrue($curso1->nombre != $curso2->nombre &&
        $curso1->descripcion != $curso2->descripcion &&
        $curso1->duracion != $curso2->duracion);
    }

    public function test_save_cursos()
    {
        $response = $this->post('/cursos', [
            'nombre' => 'PHP Laravel',
            'descripcion' => 'Laravel basico',
            'duracion' => 50,
            'imagen' => 'public/cursos/8iNAE8Ghs8JQxnqDiFehMXuCBSQ3Y5u4oo3JK8rk.png'
    ]);
    $response->assertJsonStructure(['nombre', 'descripcion', 'duracion','imagen'])
    ->assertJson(['nombre'=>'PHP Laravel'])
    ->assertStatus(201);

    $this->assertDatabaseHas('cursos', ['nombre' => 'PHP Laravel','descripcion' => 'Laravel basico', 'duracion' => 50, 'imagen' => 'imagen2.png'
    ]);
        return $response->assertRedirect('/');
    }

    public function test_delete_curso()
    {
        $curso = Curso::factory()->count(1)->make();

        $curso = Curso::first();

        if($curso){
            $curso->delete();
        }

        $this->assertTrue(true);
    }

}
