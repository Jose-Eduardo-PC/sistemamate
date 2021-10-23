@extends('layouts.showlayout')
@yield('title' ,'Usuario')
<h4>Bienvenido este es el usuario {{$user->id}} {{$user->nameus}} </h4>
<form id="eliminar" action="{{route('user.destroy',$user)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a class="boton_personalizado" href="{{route('user.edit', $user)}}">Editar Usuario</a>
<button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
<a class="boton_personalizado" href="{{route('user.index')}}" >Volver a usuarios...</a>
</div>
@section('content')
@endsection