<?php

namespace App\Http\Controllers;

use App\Models\asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaturas = asignatura::all();
        return $asignaturas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $asignaturas=new asignatura();
        $asignaturas->nombre=$request->nombre;
        $asignaturas->creditos=$request->creditos;
        $asignaturas->horas=$request->horas;
        $asignaturas->carrera=$request->carrera;
        $asignaturas->save();
        return $asignaturas;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(asignatura $asignatura)
    {
        //
        $asignaturas=asignatura::find($asignatura);
        return $asignaturas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(asignatura $asignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $asignaturas=asignatura::find($id);
        $asignaturas->nombre=$request->nombre;
        $asignaturas->creditos=$request->creditos;
        $asignaturas->horas=$request->horas;
        $asignaturas->carrera=$request->carrera;
        $asignaturas->save();
        return $asignaturas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $asignaturas=asignatura::find($id);
        $asignaturas->delete();
    }
}
