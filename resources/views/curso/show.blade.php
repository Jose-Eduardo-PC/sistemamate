@extends('layouts.layout')

<h4>Bienvenido al Curso {{$curso->name}} </h4>
@section('content')
<form id="eliminar" action="{{route('curso.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="botones">
<a class="boton_personalizado" href="{{route('curso.edit', $curso)}}">Editar Curso</a>
<button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
<a class="boton_personalizado" href="{{route('curso.index')}}" >Volver</a>
</div>
@endsection