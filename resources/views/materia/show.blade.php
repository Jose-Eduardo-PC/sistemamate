@extends('layouts.showlayout')

@section('content')
<form id="eliminar" class="formulario-eliminar" action="{{route('materia.destroy',$materia)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
            <h4> Este es la materia {{$materia->namemat}} </h4>
            <p>Descripcion:{{$materia->descripcion}}</p>
            <div class="botones mt-4">
            <a class="boton_personalizado " href="{{route('materia.edit', $materia)}}">Editar</a>
            <button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
            <a class="boton_personalizado " href="{{route('materia.index')}}" >Volver</a>
            </div>
        </div>
    </div>  
@endsection
@section('js')
@endsection