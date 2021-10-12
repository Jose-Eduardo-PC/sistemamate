@extends('layouts.layout')

@section('title', 'Curso')

@section('content')
<h1>Bienvenido a la seccion de cursos </h1>
<a href="{{route('curso.create')}}">Crear curso</a>
<ul>
    @foreach ($curso as $cursos)
    <li>
        <a href="{{route('curso.show', $cursos->id)}}">{{$cursos->id}} {{$cursos->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $curso->links() }}
</div>
@endsection