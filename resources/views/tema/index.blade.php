@extends('layouts.layout')

@section('title', 'Tema')

@section('content')
<h1>Bienvenido a la seccion de temas </h1>
<a href="{{route('tema.create')}}">Crear tema</a>
<ul>
    @foreach ($tema as $temas)
    <li>
        <a href="{{route('tema.show', $temas->id)}}">{{$temas->id}} {{$temas->name}}</a>
    </li>
    @endforeach
</ul>
<div>
{{ $tema->links() }}
</div>
@endsection