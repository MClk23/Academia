<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCursoRequest;
use App\Models\Curso;
use Illuminate\Http\Request;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*traemos toda la informacion de ka tabla cursos a
        través de la instancia cursito y el metodo all*/
        $cursito = Curso::all();
        //se adjunta cursito ala vist para poderlo usar
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCursoRequest $request)
    {
        /*
        //implementamos validaciones
        $validacionDatos = $request->validate([
            'nombre' =>'required|max:10',
            'imagen'=>'required|image'
        ]);
        */

        if($request->hasFile('imagen')){
            $archivo = $request->file('imagen');
        }
        //Se devuelve la peticion hecha al servidor
        //return $request->all();
        $cursito = new Curso();//Lo que hicimos fue crear una instancia de la clase Curso
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->duracion = $request->input('duracion');
        $cursito->save();//Con el comando save se registra la info en la db
        return view('cursos.guardado');
        //return $request->input('nombre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return 'El id de este curso es: ' . $id;
        //return view('cursos.show');
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.edit', compact('cursito'));
        //return 'El id del curso que desa actualizar es: ' . $id;
        //return ' La información que usted quiere actualizar, se veria así en formato array' . $cursito;

        //return view('cursos.edit');
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
        $cursito = Curso::find($id);
        //return $request;
        //$cursito->fill($request->all()); //llenar la tabla con el request.
        $cursito->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();
        return view('cursos.editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito = Curso::find($id);
        $urlImagenBD = $cursito->imagen;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\', $urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;
        unlink($rutaCompleta);
        $cursito ->delete();
        return view('cursos.eliminado');
    }
}
