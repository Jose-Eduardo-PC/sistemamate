@extends('layouts.layout')

@section('title', 'Evaluacion '. $evaluacion->name)

@section('content')

<h1>Bienvenido a la {{$evaluacion->name}} </h1>
<a href="{{route('evaluacion.edit', $evaluacion)}}">editar evaluacion</a>
<br>
<a href="{{route('evaluacion.index')}}">volver a evaluacions</a>
@endsection