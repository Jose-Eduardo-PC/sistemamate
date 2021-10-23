<?php

namespace App\Http\Controllers;
use App\Models\evaluacion;
use App\Models\tema;
use App\Models\User;
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
        $user = User::all();
        return view('evaluacion.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema = tema::all();
        $evaluacion = evaluacion::join('users','users.id','=','evaluacions.user_id')
        ->get();
        return view('evaluacion.create', compact('evaluacion'), compact('tema'));
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
        $evaluacion->namev = $request->namev;
        $evaluacion->descripcion = $request->descripcion;
        $evaluacion->user_id = $request->user_id;
        $evaluacion->tema_id = $request->tema_id;
        $evaluacion->fecha = $request->fecha;
        $evaluacion->save();
        return redirect()->route('evaluacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacion = evaluacion::join('users','users.id','=','evaluacions.user_id')->join('temas','temas.id','=','evaluacions.tema_id')
        ->where('users.id','=',$id)
        ->get();
        return view('evaluacion.show', compact('evaluacion'));
    }
    public function show2($id)
    {
        $evaluacion = evaluacion::find($id);
        return view('evaluacion2.show', compact('evaluacion'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tema = tema::all();
        $evaluacion = evaluacion::join('users','users.id','=','evaluacions.user_id')
        ->get();
        return view('evaluacion.edit', compact('evaluacion'),compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evaluacion $evaluacion)
    {
        $evaluacion->namev = $request->namev;
        $evaluacion->descripcion = $request->descripcion;
        $evaluacion->user_id = $request->user_id;
        $evaluacion->tema_id = $request->tema_id;
        $evaluacion->fecha = $request->fecha;
        $evaluacion->save();
        return redirect()->route('evaluacion.index',$evaluacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(evaluacion $evaluacion)
    {
        $evaluacion->delete();
        return redirect()->route('evaluacion.index');
    }
}
