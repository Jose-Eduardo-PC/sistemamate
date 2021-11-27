@extends('layouts.showlayout')

@section('content')
<form id="eliminar" class="formulario-eliminar" action="{{route('tema.destroy',$tema)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
            <h4> Este es el tema {{$tema->nametm}} </h4>
            <p>Descripcion:{{$tema->descripcion}}</p>
            <div class="botones mt-4">
            <a class="boton_personalizado " href="{{route('tema.edit', $tema)}}">Editar</a>
            <button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
            <a class="boton_personalizado " href="{{route('tema.index')}}" >Volver</a>
            </div>
        </div>
    </div>  
@endsection
@section('js')
@endsection