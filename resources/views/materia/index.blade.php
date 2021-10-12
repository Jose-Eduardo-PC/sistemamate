@extends('layouts.layout')

@section('title', 'Materia')

@section('content')
<h1>Bienvenido a la seccion de Materias </h1>
<a href="{{route('materia.create')}}">Crear curso</a>
<ul>
    @foreach ($materia as $materias)
    <li>
        <a href="{{route('materia.show', $materias->id)}}">{{$materias->id}} {{$materias->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $materia->links() }}
</div>
@endsection