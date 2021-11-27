@extends('layouts.showlayout')

@section('content')
<form id="eliminar" class="formulario-eliminar" action="{{route('actividad.destroy',$actividad)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
            <h4> Este es el la Activiad {{$actividad->nameac}} </h4>
            <p> Descripcion:{{$actividad->descripcion}}</p>
            <div class="botones mt-4">
            <a class="boton_personalizado " href="{{route('actividad.edit', $actividad)}}">Editar</a>
            <button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
            <a class="boton_personalizado " href="{{route('actividad.index')}}" >Volver</a>
            </div>
        </div>
    </div>  
@endsection
@section('js')
@endsection