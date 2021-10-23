@extends('layouts.showlayout')
<h4>Bienvenido al Tema {{$tema->name}} </h4>
<h4>Descripcion:{{$tema->descripcion}}<h4>

@yield('title')
<form id="tema" action="{{route('tema.destroy',$tema)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a  class="boton_personalizado" href="{{route('tema.edit', $tema)}}">Editar</a>
<button class="boton_personalizado" type="submit" form="tema" >Eliminar</button>
<a class="boton_personalizado" href="{{route('tema.index')}}">volver a Temas</a>
</div>
@section('content')
@endsection