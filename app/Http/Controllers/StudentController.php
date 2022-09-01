<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeStudentRequest;
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
        $studentsito->tipodoc = $request ->input('tipodoc');
        $studentsito->numdoc = $request -> input('numdoc');
        if($request->hasFile('docident')){
            $studentsito->docident = $request->file('docident')->store('public/student/docident/');
        }
        $studentsito->id_expmuni= $request-> input('id_expmuni');
        $studentsito->fecexp= $request-> input('fecexp');
        $studentsito->nombres= $request-> input('nombres');
        $studentsito->priapelli= $request-> input('priapelli');
        $studentsito->segapellido= $request-> input('segapellido');
        $studentsito->genero= $request-> input('genero');
        $studentsito->fecnacimiento= $request-> input('fecnacimiento');
        $studentsito->id_muni_nac= $request-> input('id_muni_nac');
        $studentsito->estrato= $request-> input('estrato');
        $studentsito->id_cursos= $request-> input('id_cursos');
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
        return view('student.show', compact('studentsito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentsito = Student::find($id);
        return view('student.edit', compact('studentsito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentsito = Student::all();
        $studentsito->fill($request->except('docident'));
        if($request->hasFile('docident')){
            $studentsito->docident = $request->file('docident')->store('public/student/docident');
        }
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
