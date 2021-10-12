@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')

<h1>Bienvenido este es el usuario {{$user->id}} {{$user->name}} </h1>
<br>
<a href="{{route('user.edit', $user)}}">editar curso</a>
<br>
<a href="{{route('user.index')}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection