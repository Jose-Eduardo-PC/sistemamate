@extends('layouts.layout')

@section('title', 'Materia')

@section('content')
<h1>Bienvenido a la seccion de Evaluacion </h1>
<a href="{{route('evaluacion.create')}}">Crear Evaluacion</a>
<ul>
    @foreach ($evaluacion as $evaluaciones)
    <li>
        <a href="{{route('evaluacion.show', $evaluaciones->id)}}">{{$evaluaciones->id}} {{$evaluaciones->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $evaluacion->links() }}
</div>
@endsection