@extends('layouts.layout')

@section('title', 'Actividad')

@section('content')
<h1>Bienvenido a la seccion de Actividades </h1>
<a href="{{route('actividad.create')}}">Crear Actividad</a>
<ul>
    @foreach ($actividad as $actividades)
    <li>
        <a href="{{route('actividad.show', $actividades->id)}}">{{$actividades->id}} {{$actividades->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $actividad->links() }}
</div>
@endsection