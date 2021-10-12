@extends('layouts.layout')

@section('title', 'Curso '. $curso->name)

@section('content')

<h1>Bienvenido al curso  {{$curso->name}} </h1>
<p><strong>este curso pertenece al </strong>{{$curso->grado}}</p>
<a href="{{route('curso.edit', $curso)}}">editar curso</a>
<br>
<a href="{{route('curso.index')}}">volver al curso</a>
@endsection