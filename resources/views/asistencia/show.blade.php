@extends('layouts.layout')

@section('title', 'Asistencia'. $asistencia->name)

@section('content')

<h1>Bienvenido este es la asistencia {{$asistencia->id}} {{$asistencia->estado}} {{$asistencia->user_id}} </h1>
<a href="{{route('asistencia.edit', $asistencia)}}">editar asistencia</a>
<br>
<a href="{{route('asistencia.index')}}">volver a las asistencia</a>
@endsection