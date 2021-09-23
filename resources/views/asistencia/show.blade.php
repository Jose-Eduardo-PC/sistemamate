@extends('layouts.layout')

@section('title', 'Curso'. $curso->name)

@section('content')

<h1>Bienvenido este es el usuario {{$curso->name}} </h1>
<a href="{{route('curso.index')}}">volver al curso</a>
<p><strong>grado</strong>{{$curso->grado}}</p>
@endsection