@extends('layouts.showlayout')
@yield('title' ,'Usuario')
<h4>Bienvenido esta es la Evaluacion</h4>
<form id="eliminar" action="{{route('evaluacion.destroy',$evaluacion)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a class="boton_personalizado" href="{{route('evaluacion.edit', $user)}}">Editar</a>
<button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
<a class="boton_personalizado" href="{{route('evaluacion.index')}}" >Volver</a>
</div>
@section('content')
@endsection