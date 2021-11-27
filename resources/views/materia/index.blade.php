@extends('layouts.Listalayout')
@section('header') 
@endsection
@section('content')
<div class="mt-4">
    <h2> Bienvenido a la seccion de Materias </h2>
    </div>
<div class="botones mt-4">
<a class="boton_personalizado" href="{{route('materia.create')}}">Nueva Materia</a>
<a class="boton_personalizado" href="{{route('materia.index')}}">volver</a>
<div>
    <div class="mt-4">
        <div class="card">
            <div class="card-body">
<table id="materia" class="table table-striped table-bordered">
    <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cotenido</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($materia as $materias)
            <tr>
            <td>{{$materias->id}} </td>
            <td><a href="{{route('materia.show', $materias->id)}}">{{$materias->namemat}}</a></td>
            <td>{{$materias->contenido}} </td>
            <td>{{$materias->descripcion}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection 
@section('js')
<script>
    $('#materia').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros de pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search" : "Buscar",
            "paginate" :{
                "next" : "Siguiente",
                "previous" : "Anterior"
            }
            }
    });
</script>
@endsection