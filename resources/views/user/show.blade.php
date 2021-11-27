@extends('layouts.showlayout')

@section('content')
<form id="eliminar" class="formulario-eliminar" action="{{route('user.destroy',$user)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
            <h4> Este es el usuario {{$user->name}} </h4>
            <p>ID:{{$user->id}} Genero:{{$user->genero}}</p>
            <div class="botones mt-4">
            <a class="boton_personalizado " href="{{route('user.edit', $user)}}">Editar</a>
            <button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
            <a class="boton_personalizado " href="{{route('user.index')}}" >Volver</a>
            </div>
        </div>
    </div>  
@endsection
@section('js')
@endsection