@extends('layouts.layout')

@section('title', 'Tema '. $tema->name)

@section('content')

<h1>Bienvenido a la {{$tema->name}} </h1>
<a href="{{route('tema.edit', $tema)}}">editar tema</a>
<br>
<a href="{{route('tema.index')}}">volver a los temas</a>
@endsection