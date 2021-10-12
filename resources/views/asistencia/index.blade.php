@extends('layouts.layout')

@section('title', 'Asistencia')

@section('content')
<h1>Bienvenido a la seccion Asistencia </h1>
<a href="{{route('asistencia.create')}}">crear asistencia</a>
<ul>
    @foreach ($asistencia as $asistencias)
    <li>
        <a href="{{route('asistencia.show', $asistencias->id)}}">{{$asistencias->id}} {{$asistencias->estado}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $asistencia->links() }}
</div>
@endsection