<?php

namespace App\Http\Controllers;
use App\Models\evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluacion = evaluacion::orderBy('id','asc')->paginate();
        return view('evaluacion.index', compact('evaluacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluacion = evaluacion::all();
        return view('evaluacion.create', compact('evaluacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacion = new evaluacion();

        $evaluacion->name = $request->name;
        $evaluacion->descripcion = $request->descripcion;
        $evaluacion->tema_id = $request->tema_id;
        $evaluacion->save();
        return redirect()->route('evaluacion.show',$evaluacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacion = evaluacion::find($id);
        return view('evaluacion.show', compact('evaluacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacion = evaluacion::find($id);
        return view('evaluacion.edit', compact('evaluacion'));
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
        $evaluacion = new evaluacion();

        $evaluacion->name = $request->name;
        $evaluacion->descripcion = $request->descripcion;
        $evaluacion->tema_id = $request->tema_id;
        $evaluacion->save();
        return redirect()->route('evaluacion.show',$evaluacion);
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
