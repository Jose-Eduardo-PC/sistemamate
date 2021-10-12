<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $asistencia = asistencia::orderBy('id','desc')->paginate();
        return view('asistencia.index', compact('asistencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asistencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,asistencia $asistencia)
    {
        
        $asistencia->user_id = $request->user_id;
        $asistencia->estado = $request->estado;
        $asistencia->fecha= $request->fecha;
        $asistencia->save();
        return redirect()->route('asistencia.show',$asistencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = asistencia::find($id);
        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = asistencia::find($id);
        return view('asistencia.edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,asistencia $asistencia)
    {  
        $asistencia->user_id = $request->user_id;
        $asistencia->estado = $request->estado;
        $asistencia->fecha = $request->fecha;
        $asistencia->save();
        return redirect()->route('asistencia.show',$asistencia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
