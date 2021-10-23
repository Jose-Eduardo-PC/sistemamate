@extends('layouts.layout')
<h2> Bienvenido a la seccion de Materias </h2>
@yield('title')
<div class="botones">
<a class="boton_personalizado" href="{{route('materia.create')}}">Nueva Materia</a>
<div>
<table id="materia">
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
           <td><a href="{{route('materia.show', $materias->id)}}">{{$materias->name}}</a></td>
           <td>{{$materias->contenido}} </td>
           <td>{{$materias->descripcion}} </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#materia').DataTable();
     } );
</script>
@section('content')
@endsection