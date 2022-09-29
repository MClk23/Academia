<?php

namespace Tests\Unit;

use App\Models\Docente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\Response;

use function PHPUnit\Framework\assertJson;

class DocentesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_docentes_duplicate()
    {
        $docente1 = Docente::make([
            'nombre' => 'Mauricio Andres',
            'apellido'=> 'Cardona Angel'
        ]);

        $docente2 = Docente::make([
            'nombre' => 'Stiven',
            'apellido'=> 'Aguirre'
        ]);

        $this->assertTrue($docente1->nombre != $docente2->nombre &&
        $docente1->apellido != $docente2->apellido);
    }



    public function test_save_docentes()
    {
        $respuesta = $this->post('/docentes', [
            'nombre' => 'Esteban',
            'apellido' => 'Ibarra',
            'titulouniv' => 'Ingeniero en software',
            'edad' => 19,
            'fecha'=>'2015-02-01',
            'imagen'=>'public/docentes/RAcqphBIzeHkUYS6t9W0ZdOFuPV0vtRSEGu5E6fB.jpg',
            'documento'=>'public/docentes/SdbnfiGrrPbxkhsFp7l23A8dWorbpWZxZ1qhzlzs.pdf',
            'id_curso' => 2

    ]);
        // $respuesta->assertJsonStructure(["nombre", "apellido", "titulouniv", "edad", "fecha", "imagen", "documento" , "id_curso"])
        // ->assertJson(['nombre', 'apellido', 'titulouniv', 'edad', 'fecha', 'imagen', 'documento' , 'id_curso'])
        // ->assertJson(201);
        return $respuesta->assertRedirect('/');

    }

    public function test_delete_docente()
    {
        $docentes = Docente::factory()->count(1)->make();

        $docentes = Docente::first();

        if($docentes){
            $docentes->delete();
        }

        $this->assertTrue(true);
    }

}
