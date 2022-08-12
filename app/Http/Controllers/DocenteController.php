<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentico = Docente::all();
        return view('docentes.index' , compact('docentico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $docentico = new Docente();
        $docentico->nombre = $request->input('nombre');
        $docentico->apellido = $request->input('apellido');
        $docentico->titulouniv = $request->input('titulouniv');
        $docentico->edad = $request->input('edad');
        $docentico->fecha = $request->input('fecha');
        if($request->hasFile('imagen','documento')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes');
            $docentico->documento = $request->file('documento')->store('public/docentes');
        }
        $docentico->save();
        return 'guardado';

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.show', compact('docentico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.edit', compact('docentico'));
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
        $docentico = Docente::find($id);
        $docentico->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $docentico->imagen = $request->file('imagen')->store('public/docentes');
            $docentico->documento = $request->file('documento')->store('public/docentes');
        }
        $docentico->save();
        return view('docentes.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentico = Docente::find($id);
        $urlImagenBD = $docentico->imagen;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path(). $nombreImagen;
        unlink($rutaCompleta);
        $docentico -> delete();
        return view('docentes.delete');
    }
}
