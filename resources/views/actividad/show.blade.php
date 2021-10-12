@extends('layouts.layout')

@section('title', 'Actividad '. $actividad->name)

@section('content')

<h1>Bienvenido a la {{$actividad->name}} </h1>
<a href="{{route('actividad.edit', $actividad)}}">editar Actividades</a>
<br>
<a href="{{route('actividad.index')}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a actividades...</a>
@endsection