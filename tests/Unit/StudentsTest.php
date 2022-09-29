<?php

namespace Tests\Unit;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class StudentsTest extends TestCase
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

    public function test_students_duplicate(){
        $student1 = Student::make([
        'numdoc' => '28766311',
        ]);

        $student2 = Student::make([
        'numdoc' => '1038866063',
        ]);

        $this->assertTrue($student1->numdoc != $student2->numdoc);
    }

    public function test_save_students()
    {
        $respuesta = $this->post('/student', [
            'tipodoc' => 'CC',
            'numdoc' => '1089101587',
            'docident' =>'public/student/AIwoANleRH2xLJhLMZm1Q7hDUU88sHu5yetEy06o.pdf',
            'fecexp' => '2005-05-05',
            'id_expmuni' => 'Pereira',
            'nombres' => 'Junior',
            'priapelli' => 'Aguirre',
            'segapellido' => 'Ossa',
            'genero' => 'Hombre',
            'fecnacimiento' => '2002-02-21',
            'id_muni_nac' => 'Medellin',
            'estrato' => 1,
            'id_curso' => 2

    ]);
        return $respuesta->assertRedirect('/');

    }

    public function test_delete_students(){
        $students = Student::factory()->count(1)->make();

        $students = Student::first();

        if($students){
            $students->delete();
        }

        $this->assertTrue(true);
    }

}
