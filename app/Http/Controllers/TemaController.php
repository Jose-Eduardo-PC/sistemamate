<?php

namespace App\Http\Controllers;

use App\Models\materia;
use App\Models\tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tema = tema::orderBy('id', 'asc')->paginate();
        return view('tema.index', compact('tema'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = materia::all();
        return view('tema.create', compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, tema $tema)
    {
        $tema->nametm = $request->nametm;
        $tema->descripcion = $request->descripcion;
        $tema->materia_id = $request->materia_id;
        $tema->save();
        return redirect()->route('tema.show', $tema);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = tema::find($id);
        return view('tema.show', compact('tema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = materia::all();
        $tema = tema::find($id);
        return view('tema.edit', compact('tema'), compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tema $tema)
    {
        $tema->nametm = $request->nametm;
        $tema->descripcion = $request->descripcion;
        $tema->materia_id = $request->materia_id;
        $tema->save();
        return redirect()->route('tema.show', $tema);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tema $tema)
    {
        $tema->delete();
        return redirect()->route('tema.index');
    }
}
