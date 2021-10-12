@extends('layouts.layout')

@section('title', 'Materia '. $materia->name)

@section('content')

<h1>Bienvenido a la {{$materia->name}} </h1>
<a href="{{route('materia.edit', $materia)}}">editar materia</a>
<br>
<a href="{{route('materia.index')}}">volver a la materia</a>
@endsection