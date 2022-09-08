<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeStudentRequest;
use App\Http\Requests\updateStudentRequest;
use App\Models\Country;
use App\Models\Curso;
use App\Models\State;
use App\Models\Student;
use App\Models\Town;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursito = Curso::all();
        $countries = Country::all();
        $states = State::all();
        $towns = Town::all();
        $studentsito = Student::all();
        return view('student.index', compact('studentsito', 'cursito', 'countries', 'states', 'towns', 'studentsito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursito = Curso::all();
        $countries = Country::all();
        $states = State::all();
        $towns = Town::all();
        return view ('student.create', compact('cursito', 'countries', 'states', 'towns'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeStudentRequest $request)
    {
        $studentsito = new Student();
        // $studentsito->tipodoc = $request ->input('tipodoc');
        // $studentsito->numdoc = $request -> input('numdoc');
        $studentsito->fill($request->except('docident'));

        if($request->hasFile('docident')){
            $studentsito->docident = $request->file('docident')->store('public/student/docident/');
        }
        // $studentsito->id_expmuni= $request-> input('id_expmuni');
        // $studentsito->fecexp= $request-> input('fecexp');
        // $studentsito->nombres= $request-> input('nombres');
        // $studentsito->priapelli= $request-> input('priapelli');
        // $studentsito->segapellido= $request-> input('segapellido');
        // $studentsito->genero= $request-> input('genero');
        // $studentsito->fecnacimiento= $request-> input('fecnacimiento');
        // $studentsito->id_muni_nac= $request-> input('id_muni_nac');
        // $studentsito->estrato= $request-> input('estrato');
        // $studentsito->id_cursos= $request-> input('id_cursos');

        $studentsito->save();
        return view('student.add');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentsito= Student::find($id);
        $query1 = Town::join(
            'students', 'students.id_expmuni', 'towns.id'
        )
        ->join('states', 'states.id', 'towns.id_depa')
        ->join('countries', 'countries.id', 'states.id_pais')
        ->where('students.id', $id)
        ->select('towns.nombre as nomMuni', 'states.nombre as NomDep', 'countries.nombre as nomPais')
        ->get();

        $query2 = Town::join(
            'students', 'students.id_muni_nac', 'towns.id'
        )
        ->join('states', 'states.id', 'towns.id_depa')
        ->join('countries', 'countries.id', 'states.id_pais')
        ->where('students.id', $id)
        ->select('towns.nombre as nomMuni', 'states.nombre as NomDep', 'countries.nombre as nomPais')
        ->get();

        return view('student.show', compact('query1','query2', 'studentsito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::all();
        $countries = Country::all();
        $states = State::all();
        $towns = Town::all();
        $studentsito = Student::find($id);

        $query1 = Town::join(
            'students', 'students.id_expmuni', 'towns.id'
        )
        ->join(
            'states', 'states.id', 'towns.id_depa'
        )
        ->join(
            'countries', 'countries.id', 'states.id_pais'
        )
        ->where('students.id', $id)
        ->select('towns.nombre as nomMuni', 'states.nombre as NomDep', 'countries.nombre as nomPais')
        ->get();

        $query2 = Town::join(
            'students', 'students.id_muni_nac', 'towns.id'
        )
        ->join(
            'states', 'states.id', 'towns.id_depa'
        )
        ->join(
            'countries', 'countries.id', 'states.id_pais'
        )
        ->where('students.id', $id)
        ->select('towns.nombre as  birthMuni', 'states.nombre as birthDep', 'countries.nombre as birthPais')
        ->get();
        $query3 = Curso::join(
            'students', 'students.id_cursos', 'id_cursos'
        )
        ->where('students.id', $id)
        ->select('cursos.nombre as nombre')
        ->get();

        return view('student.edit', compact('studentsito', 'cursito', 'countries', 'states', 'towns'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateStudentRequest $request, $id)
    {
        $studentsito = Student::find($id);
        $cursito = Curso::find($id);
        $studentsito->fill($request->except('docident'));
        if($request->hasFile('docident')){
            $studentsito->docident = $request->file('docident')->store('public/student');
        }
        $studentsito->save();
        return view('student.edit2', compact('cursito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentsito = Student::find($id);
        $urlDocumentBD = $studentsito->docident;
        $nombreDocumento = str_replace('public/', '\storage\\', $urlDocumentBD);
        $rutaCompleta = public_path(). $nombreDocumento;
        unlink($rutaCompleta);
        $studentsito -> delete();
        return view('student.delete');
    }
}
